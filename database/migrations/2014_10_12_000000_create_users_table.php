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
            $table->uuid('user_id')->default('default-uuid-value');;
            $table->string("first_name", 50);
            $table->string("last_name", 50);
            $table->string("country", 50);
            $table->string("city", 50);
            $table->string('phone_number', 20);
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('email')->unique();
            $table->string('user_type')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
    }
};