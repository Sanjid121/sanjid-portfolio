<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Sanjid');
            $table->string('full_name')->default('MD Sanged Hasan');
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('github_url')->nullable();
            $table->string('playstore_url')->nullable();
            $table->string('cv_url')->nullable();
            $table->string('experience_years')->default('3+');
            $table->string('badge_text')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
