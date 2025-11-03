<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->date('dob')->nullable();

            // Donor Info
            $table->string('blood_type')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->date('last_donation')->nullable();

            // Authentication
            $table->string('password');
            $table->rememberToken();

            // Role-based Access
            $table->enum('role', ['admin', 'donor'])->default('donor');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
