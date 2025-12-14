<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\Auth\EmailVerification;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\JobApplicationController;
use App\Http\Controllers\Api\JobCircularController;
use App\Http\Controllers\Api\TeamController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('auth:sanctum')->group(function (): void {
    Route::controller(LoginController::class)->group(function (): void {
        Route::post('/logout', 'logout');
        Route::get('/verify-token', 'verifyToken');
    });
    Route::controller(EmailVerification::class)->group(function (): void {
        Route::post('/email/verify', 'verifyEmail');
        Route::post('/email/resend', 'resendEmail');
    });
});

Route::post('/contact-us', [ContactUsController::class,'store']);
Route::post('/job-application', [JobApplicationController::class, 'store']);
Route::get('/careers', [JobCircularController::class, 'index']);
Route::get('/careers/{slug}', [JobCircularController::class, 'show']);
Route::get('/service-categories', [ServiceController::class, 'serviceCategories']);
Route::get('/services', [ServiceController::class, 'services']);
Route::get('/category-wise-service/{category_slug}', [ServiceController::class, 'categoryWiseServices']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects-categories', [ProjectController::class, 'projectCategories']);
Route::get('/category-wise-projects/{category_id}', [ProjectController::class, 'categoryWiseProjects']);
Route::get('/projects-details/{slug}', [ProjectController::class, 'ProjectsDetails']);
Route::get('/team-members', [TeamController::class, 'index']);
