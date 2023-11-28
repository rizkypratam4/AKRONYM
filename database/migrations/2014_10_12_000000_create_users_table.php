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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('profile_id');
            $table->string('team_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number');
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('logo_team')->nullable();
            $table->text('bio')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('logo_team');
        });
    }

    
};
