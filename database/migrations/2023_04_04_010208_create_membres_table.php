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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string("first_name", 50);
            $table->string("last_name", 50);
            $table->string("country", 50);
            $table->string('phone_number', 20);
            $table->string('email');
            $table->string('password', 60);
            $table->string('avatar')->nullable();
            $table->string('user_type')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
