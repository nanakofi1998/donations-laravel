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
        Schema::create('emergencyreliefs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->string('emergency_relief_name')->unique();
            $table->enum('type_of_emergency', ['natural-disaster', 'war', 'pandemic']);
            $table->enum('immediate_needs', ['food', 'shelter', 'medical-supplies']);
            $table->string('relief_timeframe');
            $table->string('location');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergencyreliefs');
    }
};
