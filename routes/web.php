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

Route::get('/traceroute', function () {
    return view('traceroute');
});