<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Ecommerce',
            'Mobile App',
            'Admin Dashboard'
        ];

        foreach ($categories as $name) {
            ProjectCategory::create(['name' => $name]);
        }
    }
}
