<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
});


Route::get('/hlc', function () {
    return view('pages.hlc.index');
});
