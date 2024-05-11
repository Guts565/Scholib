<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\User;
use App\Models\Beasiswa;
use App\Models\Docs;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'user_id' => function () {
                $user_id = fake()->unique()->numberBetween(2, User::count());

                // Jika user_id sudah ada, kembalikan null
                if (Student::whereUserId($user_id)->exists()) {
                    return null;
                }

                return $user_id;
            },
            'beasiswa_id' => fake()->numerify(),
            'docs_id' => fake()->numerify(),
            'nama' => fake()->name('male' | 'female'),
            'nim' => fake()->unique()->numerify('670122####'),
            'jurusan' => fake()->lexify('Teknik ?????'),
            'jk' => str_replace(['Dr.', 'Prof.', 'Miss', 'Mr.', 'Mrs', 'Ms.'], ['Pria', 'Pria', 'Wanita', 'Pria', 'Wanita', 'Wanita'], fake()->title('male' | 'female')),
            'ttl' => fake()->date(),
            'alamat' => fake()->address(),
            'kota' => fake()->city(),
            'phone' => fake()->unique()->numerify('+62###########'),
            'prodi' => fake()->lexify('S1 ?????'),
            'tahunMasuk' => function () {
                return rand(2000, date('Y'));
            },
            'semester' => fake()->numberBetween(1, 8),
            'tahunAjaran' => function () {
                $tahunAwal = rand(2000, date('Y'));
                $tahunAkhir = $tahunAwal + 1;
                return $tahunAwal . '/' . $tahunAkhir;
            },
            'ipk' => fake()->randomFloat(2, 3, 4),
            'ayah' => fake()->name('male'),
            'pekerjaan' => fake()->jobTitle(),
            'penghasilan' => fake()->numerify('1#.###.###'),
            'ibu' => fake()->name('female'),
            'profesi' => fake()->jobTitle(),
            'gaji' => fake()->numerify('1#.###.###'),
        ];
    }
}
