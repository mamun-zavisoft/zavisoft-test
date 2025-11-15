<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('backend.auth.login');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
})->name('dashboard');
Route::get('/demo', function () {
    return view('backend.demo.index');
})->name('demo');
Route::get('/system-settings', function () {
    return view('backend.settings.system-settings');
})->name('settings.system-settings');

Route::get('/page-settings', function () {
    return view('backend.settings.page-settings');
})->name('settings.page-settings');
Route::get('/services', function () {
    return view('backend.settings.services');
})->name('settings.services');
Route::get('/projects', function () {
    return view('backend.settings.projects');
})->name('settings.projects');

Route::get('/industry-focus', function () {
    return view('backend.settings.industry-focus');
})->name('settings.industry-focus');
Route::get('/partners', function () {
    return view('backend.settings.partners');
})->name('settings.partners');
Route::get('/testimonials', function () {
    return view('backend.settings.testimonials');
})->name('settings.testimonials');

Route::get('/team-members', function () {
    return view('backend.settings.team-members');
})->name('settings.team-members');

Route::get('/careers', function () {
    return view('backend.settings.careers');
})->name('settings.careers');
Route::get('/social-media', function () {
    return view('backend.settings.social-media');
})->name('settings.social-media');
Route::get('/blogs', function () {
    return view('backend.settings.blogs');
})->name('settings.blogs');