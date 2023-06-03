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
    return view('home');
})->name('home');

Route::get('/about-us', function () {
  $name = 'Pierdomenico';
  $surname = 'Guarnieri';
  return view('about', compact('name', 'surname'));
})->name('about');

Route::get('/contacts', function () {
  return view('contacts');
})->name('contacts');
