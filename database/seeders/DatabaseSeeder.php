<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
        'name' => 'ghazur',
        'email' => 'ghazur@gmail.com',
        'roles'=> 'admin',
        'password' => Hash::make('123456789'),
        'phone'=> '082148969870',
        
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'clinic_name' => 'Clinic Ghazur',
            'clinic_address' => 'Jl.Raja Wakaaka No.1',
            'clinic_phone'=> '082148969870',
            'clinic_email'=> 'clinicghazur@gmail.com',
            'Doctor_name'=> 'Ghazur',
            'unique_code'=> '234567890',        
            ]);

            $this->call(DokterSeeder::class);

    }

}
