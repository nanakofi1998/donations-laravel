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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained()->onDelete('cascade');
            $table->string('school_name');
            $table->string('school_location');
            $table->enum('school_type', ['primary', 'secondary', 'tertiary']);
            $table->enum('education_level', ['elementary', 'high-school', 'undergraduate']);
            $table->enum('education_needs', ['books', 'schorlarships', 'infrastrusture', ]);
            $table->string('number_of_beneficiaries')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
