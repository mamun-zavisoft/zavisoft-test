<?php

use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\Auth\EmailVerification;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\JobCircularController;
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
Route::post('/application', [ApplicationController::class, 'store']);
Route::get('/careers', [JobCircularController::class, 'index']);
Route::get('/careers/{id}', [JobCircularController::class, 'show']);
Route::get('/service-categories', [ServiceController::class, 'serviceCategories']);
Route::get('/services', [ServiceController::class, 'services']);
