<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('srabikowski/50299/people', 'App\Http\Controllers\PeopleController@index');
Route::get('srabikowski/50299/people/{id}', 'App\Http\Controllers\PeopleController@show');
Route::put('srabikowski/50299/people/{id}', 'App\Http\Controllers\PeopleController@update');
Route::delete('srabikowski/50299/people/{id}', 'App\Http\Controllers\PeopleController@destroy');
Route::post('srabikowski/50299/people', 'App\Http\Controllers\PeopleController@store');

Route::get('/', function () {
    return view('welcome');
});
