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
        Schema::create('profile_clinics', function (Blueprint $table) {
            $table->id();
            $table->string('clinic_name');
            $table->string('clinic_address');
            $table->string('clinic_phone');
            $table->string('clinic_email');
            $table->string('clinic_logo')->nullable();
            $table->string('description')->nullable();
            //doctor_name
            $table->string('Doctor_name');
            //code_unique
            $table->string('unique_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_clinics');
    }
};
