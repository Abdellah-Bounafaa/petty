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
        Schema::create('comments_reply', function (Blueprint $table) {
            $table->id();
            $table->uuid('comment_reply_id');
            $table->text('content');
            $table->unsignedBigInteger('comment_id');
            $table->foreign('comment_id')->references('id')->on('comments');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments_reply');
    }
};
