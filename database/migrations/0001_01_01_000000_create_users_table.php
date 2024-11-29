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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('country');
            $table->string('countryCode');
            $table->string('role')->nullable(); // e.g., Developer, Business Owner, IT Manager
            $table->string('company')->nullable(); // For users representing organizations
            $table->string('website')->nullable(); // Optional, for business users
            $table->string('phone')->nullable(); // To reach out if needed
            $table->string('referral_source')->nullable(); // How they heard about the service
            $table->string('interest_level')->nullable(); // e.g., High, Medium, Low (optional dropdown)
            $table->string('use_case')->nullable(); // e.g., Personal, Business, Enterprise
            $table->boolean('newsletter_subscribed')->default(true); // Opt-in for newsletters
            $table->string('waitlist_status')->default('pending'); // Pending, Approved, etc.
            $table->string('ip_address')->nullable(); // For geographic analytics
            $table->string('device')->nullable(); // Device used for registration
            $table->timestamps();
        });


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
