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
        Schema::create('social_welfares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->string('social_welfare_name');
            $table->enum('target_group', ['low-income-families','orphans','elderly',]);
            $table->enum('program_type', ['food-distribution','housing-assistance','counseling']);
            $table->string('location');
            $table->enum('specific_needs', ['food-supplies','clothing','counseling-services',]);
            $table->string('individuals_benefitting');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_welfares');
    }
};
