<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Core\App;
use ReflectionClass;
use ReflectionMethod;

/**
 * ActionsMap component
 */
class ActionsMapComponent extends Component
{
    
    
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    private $labels = [
        'Users' => 'Usuários',
        'Users/index' =>'macuga'
    ];
    
     
    
    
    public function initialize(array $config)
    {
        
    }
    /**
     * Busca Controller e actions publicas
     *
     * @return stdclas
     */
    public function get($controllerName, $actionName)
    {
        $results = array();
        $files = scandir(sprintf('%s/src/Controller',  $_SERVER['DOCUMENT_ROOT']));

       $ignoreList = [
            '.', 
            '..', 
            'Component', 
            'AppController.php'
        ];
        
        foreach($files as $file){
            if(!in_array($file, $ignoreList)) {
                $controller = explode('.', $file)[0];
                
                array_push($results, $controller = str_replace('Controller', '', $controller));
                $results[$controller] = new \stdclass();

                $results[$controller]->actions = array();
                $results[$controller]->ativo = $controller === $controllerName;
                $results[$controller]->label = (array_key_exists($controller, $this->labels)) ? $this->labels[$controller] : $controller;

                


                $className = sprintf("App\\Controller\\%sController", $controller);
                $class = new ReflectionClass($className);
                foreach ($class->getMethods(ReflectionMethod::IS_PUBLIC) as $action) {                    
                    if ($action->class === $className && !in_array($action->name, ['initialize', 'beforeFilter', 'beforeRender', 'afterFilter'])) {
                        $act = new \stdclass();
                        $act->name = $action->name;
                        $act->ativo = $action->name === $actionName;
                        $act->label = (array_key_exists("$controller/$action->name", $this->labels)) ? $this->labels["$controller/$action->name"] : $action->name;
                        array_push($results[$controller]->actions, $act);
                    }
                }
            }            
        }
        return $results;

    
    }


}
