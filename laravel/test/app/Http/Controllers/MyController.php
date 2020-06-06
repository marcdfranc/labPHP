<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    
    public function products()
    {
        echo('<h1>Products</h1><ol>');
        echo('<li>Notebook</li>');
        echo('<li>Printer</li>');
        echo('<li>Mouse</li>');
        echo('</ol>');
    }

    public function getName()
    {
        return "Jpsé da Silva";
    }

    public function getAge()
    {
        return "25";
    }

    public function multiply($n1, $n2)
    {
        return $n1 * $n2;
    }

}
