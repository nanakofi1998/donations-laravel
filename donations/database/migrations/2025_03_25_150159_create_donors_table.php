<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->unique();
            $table->string('institution_name')->nullable();
            $table->string('institution_address')->nullable();
            $table->decimal('donor_amount', 10, 2);
            $table->enum('donation_preference', ['one_time', 'recurring'])->default('one_time');
            $table->string('donor_phone')->nullable();
            $table->enum('donor_type', ['individual', 'institution'])->default('individual');
            $table->enum('donor_source',['seminar', 'socials', 'forum', 'referral', 'corporate', 'crowdfunding', 'email-campaign', 'event', 'outreach', 'other']);
            $table->enum('donor_lead_type', ['major-donor-prospect', 'corporate-partner', 'corporate-donor', 'influencer', 'board-member', 'legacy-donor']);
            $table->enum('pipeline_stage', ['prospecting', 'qualifying', 'contacting', 'negotiation', 'closed-won', 'closed-lost']);
            $table->enum('donor_status', ['active', 'inactive'])->default('active');
            $table->text('donor_message')->nullable();
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
