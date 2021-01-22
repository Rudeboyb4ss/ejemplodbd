<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/success', function () {
    return view('success');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/course/new','CourseController@store')->name('CourseStore');
Route::get('/course','CourseController@index');
Route::get('/users','UserController@index');
Route::get('/users/{id}','UserController@show');
Route::post('/users/create','UserController@store');
Route::put('users/update/{id}','UserController@update');
Route::delete('users/delete/{id}','UserController@destroy');