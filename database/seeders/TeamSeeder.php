<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'image' => 'teams/rubel.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 1,
            ],
           [
                'name' => 'Md Ratul Uddin Ashraf',
                'designation' => 'Team Lead',
                'image' => 'teams/ratul.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 2,
            ],
            [
                'name' => 'Badrul Hasan Sajib',
                'designation' => 'Project & Recruitment Manager',
                'image' => 'teams/sajib.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 3,
            ],
            [
                'name' => 'Md. Meraz Hossain',
                'designation' => 'Scrum Master',
                'image' => 'teams/meraz.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 4,
            ],
            [
                'name' => 'Tamim Hossain',
                'designation' => 'Frontend Developer',
                'image' => 'teams/tamim.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 5,
            ],
            [
                'name' => 'Md Abdul Mannan',
                'designation' => 'Frontend Developer',
                'image' => 'teams/mannan.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 6,
            ],
            [
                'name' => 'Shamim Hossain',
                'designation' => 'Sr. SQA Engineer',
                'image' => 'teams/shamim.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 7,
            ],
             [
                'name' => 'SMK Shawon',
                'designation' => 'SQA Engineer',
                'image' => 'teams/smk.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 8,
            ],
            [
                'name' => 'Amadul Haque',
                'designation' => 'Software Developer',
                'image' => 'teams/amad.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 9,
            ],
            [
                'name' => 'Mashikur Rahman Mirash',
                'designation' => 'Software Engineer',
                'image' => 'teams/mashikur.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 10,
            ],
            [
                'name' => 'Jeishanul Haque Shishir',
                'designation' => 'Software Engineer',
                'image' => 'teams/shishir.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 11,
            ],
            [
                'name' => 'Mizanur Rahman',
                'designation' => 'Sr. UI/Ux Designer',
                'image' => 'teams/mizan.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 12,
            ],
            [
                'name' => 'Akash Basak',
                'designation' => 'UI/Ux Designer',
                'image' => 'teams/akash.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 13,
            ],
            [
                'name' => 'Tareq Mahmud',
                'designation' => 'UI/Ux Designer',
                'image' => 'teams/tarek.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 14,
            ],
             [
                'name' => 'Mrinmoyee Dey',
                'designation' => 'UI/Ux Designer',
                'image' => 'teams/dey.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 15,
            ],
            [
                'name' => 'Md Alhaz Mondal Hredhay',
                'designation' => 'Software Engineer',
                'image' => 'teams/hredhay.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 16,
            ],
            [
                'name' => 'Mustafa Fahim',
                'designation' => 'Mobile Software engineer (Flutter)',
                'image' => 'teams/fahim.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 17,
            ],
            [
                'name' => 'Tofayel Ahmed Topu',
                'designation' => 'Software Engineer',
                'image' => 'teams/topu.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 18,
            ],
            [
                'name' => 'Samiul Kabir',
                'designation' => 'Frontend Developer',
                'image' => 'teams/kabir.webp', 
                'linkedin' => '',
                'status' => 1,
                'sl_no' => 19,
            ],
        ];        

        // Create teams
        foreach ($teams as $team) {
            Team::create($team);
        }

        $this->command->info('Team members seeded successfully!');
        $this->command->info('Total teams created: ' . count($teams));
    
    }
}
