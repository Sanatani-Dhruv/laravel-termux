<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', Counter::class);

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
