<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('badge')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->json('tech_stack');
            $table->string('playstore_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('button_text')->default('View Details');
            $table->boolean('featured')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
