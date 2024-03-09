<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    // 'dokter_name' => $this->faker->name(),
        // 'dokter_specialist' => $this->faker->word(),
        // 'sip' => $this->faker->numberBetween(1000, 9999),
        // 'dokter_phone' => $this->faker->phoneNumber(),
        // 'dokter_email' => $this->faker->email(),
        // 'dokter_address' => $this->faker->address(),
        // 'dokter_photo' => $this->faker->imageUrl(),
        // 'description' => $this->faker->text(),
    {
        \App\Models\Dokter::factory(20)->create();
    }
}
