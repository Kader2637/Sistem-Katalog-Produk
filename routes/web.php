<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/detail', function () {
    return view('detail');
})->name('detail');
Route::get('/whislist', function () {
    return view('whislist');
})->name('whislist');
