<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobCircularController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Route;

// authentication
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'request'])->name('login.request');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/system-settings', function () {
        return view('backend.settings.system-settings');
    })->name('settings.system-settings');

    Route::get('/page-settings', function () {
        return view('backend.settings.page-settings');
    })->name('settings.page-settings');

    Route::get('/industry-focus', function () {
        return view('backend.industry-focus');
    })->name('industry-focus');

    Route::get('/partners', function () {
        return view('backend.partners');
    })->name('partners');

    Route::get('/testimonials', function () {
        return view('backend.testimonials');
    })->name('testimonials');

    Route::get('social-media', function () {
        return view('backend.social-media');
    })->name('social-media');

    Route::get('/blogs', function () {
        return view('backend.blogs');
    })->name('blogs');

    // career || job post
    Route::get('careers', [JobCircularController::class, 'index'])->name('careers.index');
    Route::post('careers', [JobCircularController::class, 'store'])->name('careers.store');
    Route::get('careers/create', [JobCircularController::class, 'create'])->name('careers.create');
    Route::get('careers/edit/{id}', [JobCircularController::class, 'edit'])->name('careers.edit');
    Route::post('careers/update/{id}', [JobCircularController::class, 'update'])->name('careers.update');
    Route::post('/careers/{jobCircular}/toggle-status', [JobCircularController::class, 'toggleStatus'])->name('admin.careers.toggleStatus');

    // job application
    Route::get('/job-applications', [JobApplicationController::class, 'index'])->name('job-applications');
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::get('/view-cv/{name}', [JobApplicationController::class, 'viewCV'])->name('view.cv');
    Route::put('/job-applications-status-update/{id}', [JobApplicationController::class, 'update'])->name('job-applications.update');
    Route::delete('/job-applications/{id}', [JobApplicationController::class, 'destroy'])->name('job-applications.destroy');

    // service
    Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/create-service', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::patch('/services/update/{id}', [ServiceController::class, 'update'])->name('service.update');

    // projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/create-project', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::patch('/projects/update/{id}', [ProjectController::class, 'update'])->name('project.update');

    // team members
    Route::get('/team-members', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/create-team-member', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/team-members', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/team-members/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
    Route::patch('/team-members/update/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::post('/teams/{team}/toggle-status', [TeamController::class, 'toggleStatus'])->name('teams.toggleStatus');

    // Basic Benefits
    Route::get('/basics-benefits', function () {
        return view('backend.basics-benefits.index');
    })->name('basics-benefits');

    Route::get('/basics-benefits', [BenefitController::class, 'index'])->name('basics-benefits.index');
    Route::get('/basics-benefits/create', [BenefitController::class, 'create'])->name('basics-benefits.create');
    Route::post('/basics-benefits', [BenefitController::class, 'store'])->name('basics-benefits.store');
      Route::get('/basics-benefits/edit/{id}', [BenefitController::class, 'edit'])->name('basics-benefits.edit');
    Route::patch('/basics-benefits/update/{id}', [BenefitController::class, 'update'])->name('basics-benefits.update');
    Route::delete('/basics-benefits/{id}', [BenefitController::class, 'destroy'])->name('basics-benefits.destroy');

});
