<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    dd('teste');
});


Route::get('/opcache-status', function () {
    dump(opcache_get_status());
});
