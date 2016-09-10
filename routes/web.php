<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/' , 'EncountersController@index');
Route::resource('character', 'CharactersController');
Route::resource('encounter', 'EncountersController');
Route::resource('monster', 'MonstersController');
Route::resource('monsterInstance', 'MonsterInstancesController');
Route::resource('encounterActor', 'EncounterActorsController');
