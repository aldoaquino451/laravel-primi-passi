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

Route::get('/', function () {
    $saluto = 'Hello World!!';
    $menu = ['home', 'contact', 'login'];
    return view('home', compact('saluto', 'menu'));
});
Route::get('/login', function () {
    $saluto = 'Hello World!!';
    $menu = ['home', 'contact', 'login'];
    return view('login', compact('saluto', 'menu'));
});
Route::get('/contacts', function () {
    $saluto = 'Hello World!!';
    $menu = ['home', 'contacts', 'login'];
    return view('contacts', compact('saluto', 'menu'));
});
