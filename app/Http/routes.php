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
Route::get('pages/{page}', 'PagesController@show');

// Add a new page
Route::post('pages', 'PagesController@store');

// Add a note to a page
Route::post('pages/{page}/notes', 'NotesController@store');

// Edit a note
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');

Route::auth();

// Admin area
// Dashboard main page
Route::get('/admin', 'AdminController@index');

// Add pages
// Route::get('/admin/addPage', 'AdminController@addPage');

Route::match(['get', 'post'], '/admin/addPage', 'AdminController@addPage');

// View pages
Route::get('/admin/viewPages', 'AdminController@viewPages');

// Delete page
Route::get('/admin/deletePage/{page}', 'AdminController@deletePage');
