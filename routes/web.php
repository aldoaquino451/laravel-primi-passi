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
  $menu = [
    [
      "title" => 'Home',
      "link" => '/'
    ],
    [
      'title' => 'Login',
      'link' => '/login'
    ],
    [
      'title' => 'Contatti',
      'link' => '/contacts'
    ]
  ];

  return view('home', compact('menu'));
})->name('home');

Route::get('/login', function () {
  $menu = [
    [
      "title" => 'Home',
      "link" => '/'
    ],
    [
      'title' => 'Login',
      'link' => '/login'
    ],
    [
      'title' => 'Contatti',
      'link' => '/contacts'
    ]
  ];

  return view('login', compact('menu'));
})->name('login');

Route::get('/contacts', function () {
  $menu = [
    [
      "title" => 'Home',
      "link" => '/'
    ],
    [
      'title' => 'Login',
      'link' => '/login'
    ],
    [
      'title' => 'Contatti',
      'link' => '/contacts'
    ]
  ];

  return view('contacts', compact('menu'));
})->name('contacts');
