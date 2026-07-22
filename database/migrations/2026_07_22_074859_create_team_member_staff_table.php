<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('team_member_staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_member_id')
                ->constrained('team_members')
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('role');
            $table->string('photo')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_member_staff');
    }
};
