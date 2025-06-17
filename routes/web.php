<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Client.fages.index');
});
Route::view('/gallery', 'Client.fages.gallery');
Route::view('/contact', 'Client.fages.contact');
Route::view('/about', 'Client.fages.about');
Route::view('/typo', 'Client.fages.typo');
Route::view('/single', 'Client.fages.single');
Route::view('/admin', 'Admin.fages.dashboard');

