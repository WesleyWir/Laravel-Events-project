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
    $nome = "Wesley";
    $idade = 18;
    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});

Route::get('/contato', function () {
    return view('contact');
});