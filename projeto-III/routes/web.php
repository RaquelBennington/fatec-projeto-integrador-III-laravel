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
    return view('homepage');
});

Route::get('/comofunciona', function () {
    return view('comofunciona');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cultura', function () {
    return view('cultura');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});


