<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is licenseed.
|
*/

Route::get('memory', function () {
    return View::make('frontend/memory');
});

Route::get('pollution', function () {
    return View::make('frontend/pollution');
});

Route::get('/', ['as' => 'home', function()
{
    return View::make('frontend/home');
}]);

//Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
