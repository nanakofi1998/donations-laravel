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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name')->unique();
            $table->enum('campaign_type', ['education', 'healthcare', 'animal-care', 'social-welfare', 'emergency-relief', 'environmental-protection', 'community-development', 'persons-with-disability', 'single-patient-support']);
            $table->decimal('funding_goal', 10, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('campaign_image');
            $table->string('campaign_contact_person')->nullable();
            $table->string('campaign_contact_email')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->text('campaign_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
