<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
})->name('dashboard');
Route::get('/system-settings', function () {
    return view('backend.settings.system-settings');
})->name('settings.system-settings');

Route::get('/page-settings', function () {
    return view('backend.settings.page-settings');
})->name('settings.page-settings');
Route::get('/services', function () {
    return view('backend.settings.services');
})->name('settings.services');