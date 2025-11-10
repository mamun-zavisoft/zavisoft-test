<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
});
Route::get('/system-settings', function () {
    return view('backend.settings.system-settings');
})->name('system-settings');

Route::get('/page-settings', function () {
    return view('backend.settings.page-settings');
})->name('page-settings');