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

Route::get('/', 'Stoyan@index');

Route::get('/about', 'Stoyan@about');

Route::get('/test', 'Stoyan@test');

Route::resource('/contact', 'test');

Route::resource('/users', 'UsersController');

Route::resource('/students', 'students_controller');
