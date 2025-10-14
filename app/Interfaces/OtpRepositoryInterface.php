<?php
namespace App\Interfaces;

interface OtpRepositoryInterface
{
    public function findByEmailAndOtp(array $data);
    public function findByEmail(string $email);
    public function create(array $data);
    public function delete(int $id);
}
