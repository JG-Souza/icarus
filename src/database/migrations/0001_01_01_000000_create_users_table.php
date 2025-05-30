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
        Schema::create('users', function (Blueprint $users) {
            $users->id();
            $users->string('name');
            $users->string('email')->unique();
            $users->string('password');
            $users->timestamps();
            $users->timestamp('email_verified_at')->nullable();
            $users->rememberToken();
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