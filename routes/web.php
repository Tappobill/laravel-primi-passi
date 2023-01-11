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

    $title = "Hello World!";

    return view('home', compact('title'));
});

Route::get('/primo', function () {

    $title1 = "Sono forte!";

    return view('primo', compact('title1'));
});

Route::get('/secondo', function () {

    $title2 = "Sono troppo forte!";

    return view('secondo', compact('title2'));
});
