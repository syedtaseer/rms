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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            SectionSeeder::class,
            TemplateSeeder::class,
            TempSectionSeeder::class,
            ApplicantSeeder::class,
            ApplResumeSeeder::class,
            ResSubSectionSeeder::class,
            TagSeeder::class,
        ]);
    }
}
