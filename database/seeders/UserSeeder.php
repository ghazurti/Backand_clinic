<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
         'name' => 'ghazur',
         'email' => 'ghazur@gmail.com',
         'roles'=> 'admin',
         'password' => Hash::make('123456789'),
         'phone'=> '082148969870',
         
         ]);
    }
}
