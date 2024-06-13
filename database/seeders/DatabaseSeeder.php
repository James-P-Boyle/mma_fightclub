<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users
        \App\Models\User::factory()->count(10)->create();

        // Seed classes
        \App\Models\Lesson::factory()->count(5)->create();

        // Seed attendances
        \App\Models\Attendance::factory()->count(50)->create();
    }
}
