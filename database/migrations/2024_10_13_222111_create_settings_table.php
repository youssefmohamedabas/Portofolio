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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('title');
            $table->string('linkedin_url');
            $table->string('github_url');
            $table->string('insta_url');
            $table->string('avatar')->nullable();
            $table->string('email')->nullable();  
             $table->string('phone')->nullable();
             $table->string('pronouns')->nullable();
             $table->string('location')->nullable();
             $table->string('language')->nullable();
             $table->string('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};