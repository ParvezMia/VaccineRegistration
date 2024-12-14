<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('registered_users', function (Blueprint $table) {
            $table->id();
            $table->string('nid')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('name');
            $table->string('password');
            $table->foreignId('vaccine_center_id')->constrained();
            $table->enum('status', ['Not scheduled', 'Scheduled', 'Vaccinated'])->default('Not scheduled');
            $table->date('scheduled_date')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registered_users');
    }
};
