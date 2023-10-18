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

Route::get('/', function() { return view('main.index'); });
Route::get('/kad-jemputan', function() { return view('main.kad-jemputan'); });
Route::get('/tutorial', function() { return view('main.tutorial'); });
Route::get('/faq', function() { return view('main.faq'); });
Route::get('/contact', function() { return view('main.contact'); });
Route::get('/signin', function() { return view('main.signin'); });
Route::get('/signup', function() { return view('main.signup'); });