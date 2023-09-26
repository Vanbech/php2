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
    return view('welcome', ["name" => null ,  "age" => null]);
});

Route::get('home', function () {
    return 'welcome';
});

Route::get('welcome/{name?}/{age?}', function ($name = "", $age = 22) {
    return view( 'welcome ', ["name" => $name ,  "age" => $age]);
});
