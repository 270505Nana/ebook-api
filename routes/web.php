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
    return view('welcome');
});

Route::get('/saya', function () {
    return "hallo";
});

// string
Route::get('/saya', function () {
    return "hallo";
});

// array
Route::get('/coba1', function () {
    return ['nana', 'nana', 'nana'];
});

// objek json
Route::get('/coba2', function () {
    return [
        'Nama' => 'Nana',
        'Kelas' => '12 RPL 5',
        'NIS' => 3103120176
    ];
});

// objek json
Route::get('/coba3', function () {
    return response()->json(
        [
            'Nama' => 'Prajna',
            'Kelas' => '12 RPL 5',
            'NIS' => 3103120176
        ],201
    );
});


