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
        Schema::create('animalcares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->enum('type_of_care', ['shelter', 'rescue', 'wildfire-protection']);
            $table->enum('animal_species', ['dog', 'cat', 'wildlife']);
            $table->enum('animal_needs', ['food', 'medical', 'adoption']);
            $table->string('location');
            $table->string('number_of_animals');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animalcares');
    }
};
