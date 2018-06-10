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
Route::get('home/randomWord/{lg1}','HomeController@randomWord');
Route::get('home/deleteScore','HomeController@deleteScore');


Route::post('checkSubmittedWord','CheckSubmittedWordController@checkSubmittedWord');
Route::post('showAnswer','ShowAnswerController@showAnswer');
Route::get('addword',function() {
    return View::make('addword');
});
Route::post('addNewWord','AddWordController@addNewWord');
Route::get('showdictionary', 'ShowdictionaryController@showDictionary');
Route::post('editWord', 'ShowdictionaryController@editWord');
Route::get('about', function() {
    return View::make('about');
});