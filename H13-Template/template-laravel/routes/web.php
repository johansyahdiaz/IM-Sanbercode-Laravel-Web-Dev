<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/master', function() {
    return view('layouts.master');
});

Route::get('/table', function() {
    return view('pages.table');
});

Route::get('/data-tables', function() {
    return view('pages.table-data');
});