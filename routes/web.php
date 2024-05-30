<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/porto', function () {
    return view('porto', ['title' => 'Portofolio']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
