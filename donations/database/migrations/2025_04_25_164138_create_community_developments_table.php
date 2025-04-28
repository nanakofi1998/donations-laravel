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
        Schema::create('community_developments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiary_id')->constrained('beneficiaries')->onDelete('cascade');
            $table->enum('target_community', ['urban','rural', 'indigenous']);
            $table->enum('type_of_development', ['infrastructure', 'education', 'economic-empowerment', ]);
            $table->enum('educational_needs', ['books', 'schorlarsips', 'infrastructure']);
            $table->string('location');
            $table->string('number_of_beneficiaries');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community_developments');
    }
};
