<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Facades\App\Interfaces\OtpRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Log;
use function Illuminate\Log\log;

class EmailVerification extends Controller
{
    public function verifyEmail(Request $request): JsonResponse
    {
        $request->validate(
            [
                'otp' => ['required', 'numeric', 'digits:6'],
            ],
            [
                'otp.required' => 'OTP is required',
                'otp.numeric' => 'OTP must be numeric',
                'otp.digits' => 'OTP must be 6 digits',
            ],
        );

        $user = $request->user();

        $otp = OtpRepositoryInterface::findByEmailAndOtp([
            'email' => $user->email,
            'otp' => $request->otp,
        ]);

        if ($otp) {
            Log::info(now()->diffInMinutes($otp->expires_at));
            if (now()->diffInMinutes($otp->expires_at) < 0 || now()->diffInMinutes($otp->expires_at) >= 5) {
                return $this->response(__('OTP expired'), [], 400);
            }

            OtpRepositoryInterface::delete($otp->id);

            $user->email_verified_at = now();
            $user->save();

            return $this->response(__('Email verified successfully'), [], 200);
        }

        return $this->response(__('Invalid OTP'), [], 400);
    }

    public function resendEmail(Request $request): JsonResponse
    {
        $user = $request->user();

        $opt = OtpRepositoryInterface::findByEmail($user->email);

        if ($opt) {
            OtpRepositoryInterface::delete($opt->id);
        }

        OtpRepositoryInterface::create([
            'email' => $user->email,
            'otp' => random_int(100000, 999999),
            'expires_at' => now()->addMinutes(5),
        ]);

        return $this->response(__('OTP resended successfully'), [], 200);
    }
}
