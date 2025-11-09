<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
});