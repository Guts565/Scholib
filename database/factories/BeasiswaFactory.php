<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Beasiswa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beasiswa>
 */
class BeasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'judul' => fake()->text(),
            // 'deskripsi' => fake()->text(),
            // 'deadline' => fake()->date(),
        ];
    }

    /**
     * Define the model's state after creation.
     *
     * @return void
     */
    // public function configure()
    // {
    //     $this->afterCreating(function (Beasiswa $beasiswa) {
    //         // Menghubungkan beasiswa dengan beberapa students
    //         $beasiswa->students()->attach(
    //             Student::inRandomOrder()->limit(5)->pluck('nim')->toArray()
    //         );
    //     });
    // }
}
