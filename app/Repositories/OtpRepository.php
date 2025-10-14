<?php

namespace App\Repositories;

use App\Interfaces\OtpRepositoryInterface;
use App\Models\Otp;
use Illuminate\Database\Eloquent\Collection;

class OtpRepository implements OtpRepositoryInterface
{
    public function findByEmailAndOtp(array $data): ?Otp
    {
        return Otp::where($data)->first();
    }

    public function findByEmail(string $email): ?Otp
    {
        return Otp::where('email', $email)->first();
    }

    public function create(array $data): Otp
    {
        return Otp::create($data);
    }

    public function delete(int $id): int
    {
        return Otp::destroy($id);
    }
}
