<?php

use App\Http\Controllers\Api\Auth\EmailVerification;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
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