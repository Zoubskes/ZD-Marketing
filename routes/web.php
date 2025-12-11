<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/werkenbij', function(){
    return view('werkenbij');
});

Route::get('/over-ons', function(){
    return view('over-ons');
});
