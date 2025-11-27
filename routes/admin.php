<?php

use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\JobCircularController;
use App\Http\Controllers\Admin\MessageController;
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
    })->name('services');

    Route::get('/projects', function () {
        return view('backend.settings.projects');
    })->name('projects');

    Route::get('/industry-focus', function () {
        return view('backend.settings.industry-focus');
    })->name('industry-focus');

    Route::get('/partners', function () {
        return view('backend.settings.partners');
    })->name('partners');

    Route::get('/testimonials', function () {
        return view('backend.settings.testimonials');
    })->name('testimonials');

    Route::get('/team-members', function () {
        return view('backend.settings.team-members');
    })->name('team-members');

    Route::get('careers', [JobCircularController::class, 'index'])->name('careers.index');
    Route::post('careers', [JobCircularController::class, 'store'])->name('careers.store');
    Route::get('careers/create', [JobCircularController::class, 'create'])->name('careers.create');
    Route::get('careers/edit/{id}', [JobCircularController::class, 'edit'])->name('careers.edit');
    Route::post('careers/update/{id}', [JobCircularController::class, 'update'])->name('careers.update');
    Route::post('/careers/{jobCircular}/toggle-status', [JobCircularController::class, 'toggleStatus'])->name('admin.careers.toggleStatus');

    Route::get('settings/social-media', function () {
        return view('backend.settings.social-media');
    })->name('settings.social-media');

    Route::get('/blogs', function () {
        return view('backend.settings.blogs');
    })->name('settings.blogs');

    Route::get('/applications', [ApplicationController::class, 'index'])->name('applications');
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::get('/download-cv/{id}', [ApplicationController::class, 'downloadCV'])->name('download.cv');
});
