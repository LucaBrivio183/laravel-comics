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

Route::get('/comics', function () {
    $data = [
        'comics' => config('comics'),
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/series/{index}', function ($index) {
    $data = [
        'comics' => config('comics')[$index],
    ];
    return view('series', $data);
})->name('series')->where('index', '[0-9]+');
