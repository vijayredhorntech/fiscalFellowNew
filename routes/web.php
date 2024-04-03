<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');



Route::get('/about_promoter', function () {
    return view('about_promoter');
})->name('about_promoter');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/mutual_funds', function () {
    return view('mutualFunds');
})->name('mutualFunds');
Route::get('/loans', function () {
    return view('loans');
})->name('loans');

Route::get('/digital_signature', function () {
    return view('digitalSignature');
})->name('digitalSignature');

Route::get('/business_support', function () {
    return view('businessSupport');
})->name('businessSupport');

Route::get('/dsa', function () {
    return view('dsa');
})->name('dsa');
