<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('researchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('research_group_id')
                ->nullable()
                ->constrained('research_groups')
                ->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('title');
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->longText('bio')->nullable();
            $table->json('education')->nullable();
            $table->json('publications')->nullable();
            $table->string('google_scholar_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('orcid_url')->nullable();
            $table->text('unit_description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('researchers');
    }
};
