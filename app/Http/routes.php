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

Route::get('/', array('as'=>'home','uses'=>'WelcomeController@index'));
Route::get('register', array('as'=>'register','uses'=>'WelcomeController@show_register'));
Route::get('team', array('as'=>'team','uses'=>'WelcomeController@show_team'));
Route::get('terms-and-condition', array('as'=>'tnc','uses'=>'WelcomeController@tnc'));
Route::get('privacypolicy', array('as'=>'privacypolicy','uses'=>'WelcomeController@privacypolicy'));

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
