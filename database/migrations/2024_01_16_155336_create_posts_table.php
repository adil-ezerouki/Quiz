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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');

            $table->string('postContent')->nullable();
            $table->string('postMeidaPath')->nullable();
            $table->foreignId('feeling_id')->nullable()->constrained('feelings');
            $table->foreignId('activity_id')->nullable()->constrained('activities');
            $table->string('tag')->nullable();
            $table->string('location')->nullable();
            $table->string('visibility');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
