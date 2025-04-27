<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\hewan;
use Faker\Generator as Faker;

class HewanFactory extends Factory
{
    protected $model = hewan::class;

    public function definition(): array
    {
        return [
            'nama_hewan' => $this->faker->word, // Nama hewan acak
            'jenis_hewan' => $this->faker->randomElement(['anjing', 'kucing', 'kelinci', 'ikan']), // Jenis hewan acak
            'ras' => $this->faker->word, // Ras hewan acak
            'tanggal_lahir' => $this->faker->date(), // Tanggal lahir acak
            'nama_pemilik' => $this->faker->name, // Nama pemilik hewan acak
            'kontak_pemilik' => $this->faker->phoneNumber, // Nomor kontak pemilik acak
            'status' => $this->faker->randomElement(['aktif', 'tidak_aktif']), // Status acak
        ];
    }
}
