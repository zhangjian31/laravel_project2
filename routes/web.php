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
Route::get('hello', function()
{
    return 'hello，Welcome to my laravel!';
});

Route::get('users', 'UserController@getIndex');

Route::match(['get','post'],'foo',function(){
    return 'match';
});

Route::any('bar',function(){
    return 'any';
});