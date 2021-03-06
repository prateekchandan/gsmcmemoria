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
Route::get('confirm', array('as'=>'confirm','uses'=>'WelcomeController@register_confirm'));
Route::post('result', array('as'=>'result','uses'=>'WelcomeController@register_result'));
Route::post('contact', array('as'=>'contact','uses'=>'WelcomeController@contact'));
Route::post('register', array('as'=>'register','uses'=>'WelcomeController@register'));
Route::get('merchandise', array('as'=>'team','uses'=>'WelcomeController@show_team'));
Route::get('terms', array('as'=>'tnc','uses'=>'WelcomeController@tnc'));
Route::get('privacy', array('as'=>'privacypolicy','uses'=>'WelcomeController@privacypolicy'));

Route::get('home', 'WelcomeController@index');
Route::get('download', 'WelcomeController@download');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
