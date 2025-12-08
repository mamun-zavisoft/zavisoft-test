<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'info@zavisoft.com',
            'role' => 'admin',
            'password' => bcrypt('ZaviSoft007@'),
        ]);
    }
}
