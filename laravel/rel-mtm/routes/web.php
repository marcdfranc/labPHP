<?php

use App\Developer;
use App\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/developer_projects/json', function () {
    $developers = Developer::with('projects')->get();
    return $developers->toJson();
});


Route::get('/projects_projects/json', function () {
    $projects = Project::with('developers')->get();
    return $projects->toJson();
});

Route::get('/allocation_projects/json', function () {

    $project = Project::find(4);
    if (isset($project)) {
        // $project->developers()->attach(1, ['hours_per_week' => 4]);

        /*$project->developers()->attach([
            2 => ['hours_per_week' => 30],
            3 => ['hours_per_week' => 60]
        ]);*/

        // $project->developers()->detach([1, 2, 3]);
    }
});
