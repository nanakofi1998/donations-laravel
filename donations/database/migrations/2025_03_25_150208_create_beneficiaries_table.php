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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiary_name');
            $table->enum('beneficiary_type',['education','healthcare','animal-care','social-welfare','emergency-relief','environmental-protection','community-development','persons-with-disability','single-patient-support']);
            $table->string('beneficiary_contact_person');
            $table->string('beneficiary_contact_email');
            $table->string('beneficiary_contact_number');
            $table->enum('status',['active','inactive'])->default('active');
            $table->text('beneficiary_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
