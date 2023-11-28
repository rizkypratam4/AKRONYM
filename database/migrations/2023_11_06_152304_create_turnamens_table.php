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
        Schema::create('turnamens', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_name');
            $table->integer('entry_fee');
            $table->integer('prize_pool');
            $table->integer('slots_available');
            $table->integer('slots_occupied')->default(0);
            $table->date('jadwal_mulai');
            $table->date('jadwal_selesai');
            $table->string('organizer');
            $table->text('description');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnamens');
    }
};
