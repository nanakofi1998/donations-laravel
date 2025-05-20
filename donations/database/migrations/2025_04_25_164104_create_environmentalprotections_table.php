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
        Schema::create('environmentalprotections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->string('environmental_protection_name');
            $table->enum('type_of_initiative', ['reforestation', 'wildlife-conservation', 'clean-water']);
            $table->enum('required_resources', ['funding', 'volunteers', 'equipment']);
            $table->string('location');
            $table->string('number_of_areas');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environmentalprotections');
    }
};
