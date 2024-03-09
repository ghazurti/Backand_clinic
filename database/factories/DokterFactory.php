<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'dokter_name' => $this->faker->name(),
        'dokter_specialist' => $this->faker->word(),
        'nik' => $this->faker->numberBetween(1000, 9999),
        'sip' => $this->faker->numberBetween(1000, 9999),
        'dokter_phone' => $this->faker->phoneNumber(),
        'dokter_email' => $this->faker->email(),
        'dokter_address' => $this->faker->address(),
        'dokter_photo' => $this->faker->imageUrl(),
        'description' => $this->faker->text(),
        ];
    }
}
