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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('AddTest')->nullable();
            $table->string('PatientName')->nullable();
            $table->string('PatientAge')->nullable();
            $table->string('Phonenumber')->nullable();
            $table->string('Patientid')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Address')->nullable();
            $table->string('Bloodgroup')->nullable();
            $table->string('Bloodgroup')->nullable();
            $table->string('Doctorname')->nullable();
            $table->string('RefferedBy')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
