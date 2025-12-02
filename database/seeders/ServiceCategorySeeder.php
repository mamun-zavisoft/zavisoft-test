<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'UI/UX Design & Audit',
            'Software Development',
            'Web Application Development',
            'Mobile App Development',
            'QA Testing',
            'Database Management',
        ];

        foreach ($categories as $name) {
            ServiceCategory::create(['name' => $name]);
        }
    }
}
