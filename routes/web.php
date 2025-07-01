<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acerca-de-nosotros', function () {
    return view('pages.about');
});

Route::get('/contacto', function () {
    return view('pages.contact');
});

Route::get('/servicios', function () {
    return view('pages.services');
});
