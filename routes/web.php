<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/mapbootstrap', function () {
    return view('mapbootstrap');
});

Route::get('/map2', function () {
    return view('map2');
});