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
  $contact_infos = [
    $name = 'Pierdomenico',
    $surname = 'Guarnieri',
    $email = 'mail@mail.it',
    $phone = '123456789',
    $address = 'Street Unnamed, Italy'
  ];
  return view('contacts', compact('contact_infos'));
})->name('contacts');
