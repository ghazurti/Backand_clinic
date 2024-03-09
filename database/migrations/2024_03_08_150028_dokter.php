<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('profile_clinics', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('clinic_name');
        //     $table->string('clinic_address');
        //     $table->string('clinic_phone');
        //     $table->string('clinic_email');
        //     $table->string('clinic_logo')->nullable();
        //     $table->string('description')->nullable();
        //     //doctor_name
        //     $table->string('Doctor_name');
        //     //code_unique
        //     $table->string('unique_code');
        //     $table->timestamps();
        // });
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('dokter_name');
            $table->string('dokter_specialist');
            $table->string('nik');
            $table->string('sip');
            $table->string('dokter_phone');
            $table->string('dokter_email');
            $table->string('dokter_address');
            $table->string('dokter_photo')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
