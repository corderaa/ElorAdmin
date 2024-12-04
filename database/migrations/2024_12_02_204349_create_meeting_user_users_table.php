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
        Schema::create('meeting_user_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('first_user_id');
            $table->unsignedBigInteger('second_user_id');
            $table->foreign('second_user_id')->references('id')->on('users');
            $table->foreign('first_user_id')->references('id')->on('users');
            $table->date('meeting_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_user_users');
    }
};
