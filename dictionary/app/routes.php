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

Route::get('home', 'HomeController@showHome');
Route::get('showdictionary', 'ShowdictionaryController@showDictionary');
/*Route::get('showdictionary', function()
{
    $words = Word::all();

    return View::make('showdictionary')->with('words', $words);
});*/