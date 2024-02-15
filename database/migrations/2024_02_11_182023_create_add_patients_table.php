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
        Schema::create('add_patients', function (Blueprint $table) {
            $table->id();
            $table->string('addtest')->nullable();
            $table->string('patientname')->nullable();
            $table->string('patientage')->nullable();
            $table->string('phonenumber')->unique();
            $table->string('patientid')->nullable();
            $table->string('gender')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string('address')->nullable();
            $table->string('doctorname')->nullable();
            $table->string('referredby')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_patients');
    }
};
