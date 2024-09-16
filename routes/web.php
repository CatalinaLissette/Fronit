<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Esta será la página de inicio si accedes a la raíz '/'
});

Route::get('/home', function () {
    return view('home'); // Esta será la página que se mostrará al acceder a '/home'
});
