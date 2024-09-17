<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home'); // Esta será la página que se mostrará al acceder a '/home'
});
