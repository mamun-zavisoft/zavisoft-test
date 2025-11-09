<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('admin.auth.login');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});