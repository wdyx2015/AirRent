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

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/booking', function()
{
    return View::make('booking');
});

Route::get('/newplace', function()
{
    return View::make('newplace');
});

Route::get('/inbox/{uid1?}/{uid2?}',array('as' => 'inbox', 'uses' => 'InboxsController@index'));

Route::post('/inbox/{userid1?}/{userid2?}', array('as' => 'messages.store', 'uses' => 'InboxsController@store'));


Route::get('/searchs', function()
{
    return View::make('searchs');
});

Route::get('/yourlistings', function()
{
    return View::make('yourlistings');
});

Route::get('/listspaces', function()
{
    return View::make('listspaces');
});

Route::get('/propertydetails', function()
{
    return View::make('propertydetails');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
