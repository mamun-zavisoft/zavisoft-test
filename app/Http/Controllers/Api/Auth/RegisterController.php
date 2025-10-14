<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use Facades\App\Interfaces\OtpRepositoryInterface;
use Facades\App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = UserRepositoryInterface::create($request->all());

        OtpRepositoryInterface::create([
            'email' => $user->email,
            'otp' => random_int(100000, 999999),
            'expires_at' => now()->addMinutes(5),
        ]);

        return $this->response(
            __('Registered successfully'),
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
}
