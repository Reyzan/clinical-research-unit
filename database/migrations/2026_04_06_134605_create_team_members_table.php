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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->longText('bio')->nullable();
            $table->string('image')->nullable();

            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('nationality')->nullable();
            $table->string('languages')->nullable();
            $table->string('speciality')->nullable();

            $table->json('education')->nullable();
            $table->json('experience')->nullable();
            $table->json('publications')->nullable();

            $table->string('cv_file')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
