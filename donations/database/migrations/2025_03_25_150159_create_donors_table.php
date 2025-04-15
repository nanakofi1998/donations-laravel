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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('donor_email')->unique();
            $table->string('organization_name')->nullable();
            $table->decimal('donor_amount', 10, 2);
            $table->enum('donation_preference', ['one_time', 'recurring', 'crowd_funding'])->default('one_time');
            $table->string('donor_phone')->nullable();
            $table->boolean('anonymous')->default(false);
            $table->text('donor_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
