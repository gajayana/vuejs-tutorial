<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/tasks', function () {
    return App\Task::latest()->get();
});


Route::get('vue_laravel_and_ajax', function () {
    return view('vue_laravel_and_ajax');
});