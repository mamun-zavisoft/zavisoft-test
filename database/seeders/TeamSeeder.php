<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $teams = [
                [
                'name' => 'Mosarrof Hossain',
                'designation' => 'Tech Advisor',
                'image' => 'rubel.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 1,
            ],
           [
                'name' => 'Md Ratul Uddin Ashraf',
                'designation' => 'Team Lead',
                'image' => 'ratul.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 2,
            ],
            [
                'name' => 'Badrul Hasan Sajib',
                'designation' => 'Project & Recruitment Manager',
                'image' => 'sajib.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 3,
            ],
            [
                'name' => 'Md. Meraz Hossain',
                'designation' => 'Scrum Master',
                'image' => 'meraz.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 4,
            ],
            [
                'name' => 'Tamim Hossain',
                'designation' => 'Frontend Developer',
                'image' => 'tamim.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 5,
            ],
            [
                'name' => 'Md Abdul Mannan',
                'designation' => 'Frontend Developer',
                'image' => 'mannan.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 6,
            ],
            [
                'name' => 'Shamim Hossain',
                'designation' => 'Sr. SQA Engineer',
                'image' => 'shamim.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 7,
            ],
             [
                'name' => 'SMK Shawon',
                'designation' => 'SQA Engineer',
                'image' => 'smk.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 8,
            ],
            [
                'name' => 'Amadul Haque',
                'designation' => 'Software Developer',
                'image' => 'amad.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 9,
            ],
            [
                'name' => 'Mashikur Rahman Mirash',
                'designation' => 'Software Engineer',
                'image' => 'mashikur.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 10,
            ],
            [
                'name' => 'Jeishanul Haque Shishir',
                'designation' => 'Software Engineer',
                'image' => 'shishir.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 11,
            ],
            [
                'name' => 'Mizanur Rahman',
                'designation' => 'Sr. UI/Ux Designer',
                'image' => 'mizan.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 12,
            ],
            [
                'name' => 'Akash Basak',
                'designation' => 'UI/Ux Designer',
                'image' => 'akash.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 13,
            ],
            [
                'name' => 'Tareq Mahmud',
                'designation' => 'UI/Ux Designer',
                'image' => 'tarek.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 14,
            ],
             [
                'name' => 'Mrinmoyee Dey',
                'designation' => 'UI/Ux Designer',
                'image' => 'dey.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 15,
            ],
            [
                'name' => 'Md Alhaz Mondal Hredhay',
                'designation' => 'Software Engineer',
                'image' => 'hredhay.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 16,
            ],
            [
                'name' => 'Mustafa Fahim',
                'designation' => 'Mobile Software engineer (Flutter)',
                'image' => 'fahim.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 17,
            ],
            [
                'name' => 'Tofayel Ahmed Topu',
                'designation' => 'Software Engineer',
                'image' => 'topu.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 18,
            ],
            [
                'name' => 'Samiul Kabir',
                'designation' => 'Frontend Developer',
                'image' => 'kabir.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 19,
            ],
        ];

        foreach ($teams as $team) {

            $sourcePath = database_path('seeders/assets/teams/' . $team['image']);
            $destinationPath = 'teams/' . $team['image'];

            // Ensure teams directory exists
            Storage::disk('public')->makeDirectory('teams');

            // Copy image only if not exists
            if (!Storage::disk('public')->exists($destinationPath)) {
                Storage::disk('public')->put(
                    $destinationPath,
                    file_get_contents($sourcePath)
                );
            }

            Team::updateOrCreate(
                ['sl_no' => $team['sl_no']],
                [
                    'name' => $team['name'],
                    'designation' => $team['designation'],
                    'image' => $destinationPath,
                    'linkedin' => $team['linkedin'],
                    'status' => $team['status'],
                ]
            );
        }

         $this->command->info('Team members seeded successfully!');
        $this->command->info('Total teams created: ' . count($teams));
    
    }
}
