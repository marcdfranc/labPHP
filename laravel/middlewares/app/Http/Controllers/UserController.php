<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('first');
    }

    public function index()
    {
        return "<h3>Users List</h3>
        <ul>
            <li>João</li>
            <li>Marcos</li>
            <li>José</li>
            <li>Maria</li>
        </ul>";
    }
}
