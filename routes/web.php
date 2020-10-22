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

/**Route::get('/', function () {
    return view('welcome');

Route::get('/index', function () {
    return view('page.index');
});
    
Route::get('/home', function () {
    return view('page.home');
});
    
Route::get('/users', function () {
    return view('page.users');
});
         
Route::get('/accounts', function () {
    return view('page.accounts'); **/
    
Route::get('/', 'SiteController@index');

Route::get('/users', 'UserController@index');

Route::get('/accounts', 'AccountController@index');