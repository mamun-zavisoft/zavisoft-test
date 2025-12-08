<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;

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
            ServiceCategory::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
