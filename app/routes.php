<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/'       , ['as' => 'root_path'    , 'uses' => 'StaticPageController@home']);
Route::get('help'    , ['as' => 'help_path'    , 'uses' => 'StaticPageController@help']);
Route::get('about'   , ['as' => 'about_path'   , 'uses' => 'StaticPageController@about']);
Route::get('contact' , ['as' => 'contact_path' , 'uses' => 'StaticPageController@contact']);
