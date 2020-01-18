<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/league/{league}/scoreboard', 'LeagueController@index')
    ->name('league.scoreboard');
Route::get('/league/{league}/matches', 'LeagueController@matches')
    ->name('league.matches');
