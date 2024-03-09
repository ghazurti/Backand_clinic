<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'dokter_name',
        'dokter_specialist',
        'nik',
        'sip',
        'dokter_phone',
        'dokter_email',
        'dokter_address',
        'dokter_photo',
        'description',
    ];
    // $table->id();
    // $table->string('dokter_name');
    // $table->string('dokter_specialist');
    // $table->string('sip');
    // $table->string('dokter_phone');
    // $table->string('dokter_email');
    // $table->string('dokter_address');
    // $table->string('dokter_photo')->nullable();
    // $table->string('description')->nullable();
    // $table->timestamps();
}
