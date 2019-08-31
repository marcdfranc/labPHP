<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ActionsMapComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ActionsMapComponent Test Case
 */
class ActionsMapComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\ActionsMapComponent
     */
    public $ActionsMap;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->ActionsMap = new ActionsMapComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActionsMap);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
