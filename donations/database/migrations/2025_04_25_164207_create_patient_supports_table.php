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
        Schema::create('patient_supports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->string('patient_id')->unique();
            $table->enum('type_of_support',['medical-supplies', 'therapy', 'medication']);
            $table->enum('health_condition',['cancer', 'chronic-illness', 'disability']);
            $table->enum('medical_needs',['surgery', 'rehabilitation', 'medication']);
            $table->string('location');
            $table->string('facility_name');
            $table->string('facility_address');
            $table->string('timeline_for_support');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_supports');
    }
};
