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

Route::get('/', 'PagesController@welcome_test');
Route::get('about', 'PagesController@about');
Route::get('vueex', 'PagesController@vueex');
Route::get('skills', 'PagesController@skills');
Route::get('plans', 'PagesController@plans');
Route::get('lessons', 'PagesController@lessons');
Route::get('tasks', 'PagesController@tasks');
Route::get('tasks_ajax', 'PagesController@tasks_ajax');
Route::get('api/tasks_ajax_data', 'PagesController@tasks_ajax_data');

Route::get('/welcome', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
