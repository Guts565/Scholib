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
        \App\Models\User::factory()->create([
            'username' => 'admin',
            'email' => 'test@example.com',
            'password' => 'admin',
            'acc_type' => 'admin',
        ]);
        \App\Models\User::factory()->create([
            'username' => 'guts',
            'email' => 't@example.com',
            'password' => 'guts',
            'acc_type' => 'user',
        ]);
        \App\Models\User::factory()->create([
            'username' => 'casca',
            'email' => 'tas@example.com',
            'password' => 'casca',
            'acc_type' => 'user',
        ]);
        // \App\Models\Beasiswa::factory()->create();
        \App\Models\User::factory(5)->create();
        \App\Models\Student::factory(5)->create();
    }
}
