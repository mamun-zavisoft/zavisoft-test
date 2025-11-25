<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\JobCircularController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'request'])->name('login.request');

//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth'], function () {
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

// Route::get('/careers', function () {
//     return view('backend.settings.careers');
// })->name('settings.careers');
Route::name('settings.')->group(function () {
    Route::resource('careers', JobCircularController::class);
    // admin.settings.careers
});

Route::get('/social-media', function () {
    return view('backend.settings.social-media');
})->name('settings.social-media');
Route::get('/blogs', function () {
    return view('backend.settings.blogs');
})->name('settings.blogs');
});

