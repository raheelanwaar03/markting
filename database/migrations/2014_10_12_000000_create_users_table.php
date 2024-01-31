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
            $table->string('name');
            $table->string('email')->unique();
            $table->float('balance', 10, 2)->default(0);
            $table->string('referral')->default('default');
            $table->string('level')->default('Level 0');
            $table->string('number');
            $table->string('user_code');
            $table->string('role')->default('user');
            $table->string('status')->default('approved');
            $table->string('password');
            $table->integer('key');
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
    }
};
