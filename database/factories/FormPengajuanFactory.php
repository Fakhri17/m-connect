<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormPengajuan>
 */
class FormPengajuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();

        return [
            'nama' => $faker->name(),
            'nama_pt' => 'PT. ' . $faker->word(),
            'alamat_pt' => 'Jl. ' . $faker->streetAddress(),
            'email' => $faker->email(),
            'no_telp' => $faker->phoneNumber(),
            'pengajuan' => 'Konsultasi SOP',
            'deskripsi' => $faker->text()
        ];
    }
}
