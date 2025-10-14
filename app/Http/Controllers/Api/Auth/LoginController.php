<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return $this->response(__('Password is incorrect'), [], 401);
        }

        $user = Auth::user();

        return $this->response(
            __('Logged in successfully'),
            [
                'user' => UserResource::make($user),
                'access' => [
                    'auth_type' => 'Bearer',
                    'token' => $user->createToken('authToken')->plainTextToken,
                    'expire_at' => now()->addDays(7),
                ],
            ],
            200,
        );
    }

    public function verifyToken(): JsonResponse
    {
        return $this->response(__('Token is valid'), [], 200);
    }

    public function logout(): JsonResponse
    {
        Auth::user()->tokens()->delete();

        return $this->response(__('Logged out successfully'), [], 200);
    }
}
