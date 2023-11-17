<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employer;
use App\Models\Freelancer;
use App\Models\Posting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Freelancer::factory(10)->create();
        Employer::factory(10)->create();
        Posting::factory(10)->create();
    }
}
