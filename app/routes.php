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



Route::group(array('domain' => '{clubname}.scut.club'), function()
{
    Route::get('/', 'SiteController@homePage');
    Route::get('/{str}', 'SiteController@withPattern');

});

Route::get('/', function()
{
    return View::make('index.index', array('head_title' => 'SCUT.club'));
});

App::missing(function($exception)
{
    return Response::view('errors.404', array(), 404);
});
