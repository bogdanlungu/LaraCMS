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
    $users = ['John', 'Andrew', 'Michael'];
    return view('main', ['users' => $users]);
});


Route::get('test', function () {
    $users = ['John', 'Andrew', 'Michael'];
    return view('test')->with('users', $users);
});


Route::get('pages', 'PagesController@home');   
