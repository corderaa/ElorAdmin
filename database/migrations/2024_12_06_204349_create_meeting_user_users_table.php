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
            $table->softDeletes();
            $table->unsignedBigInteger('first_user_id');
            $table->unsignedBigInteger('second_user_id');
            $table->unsignedBigInteger('meeting_status_id');
            $table->foreign('second_user_id')->references('id')->on('users');
            $table->foreign('first_user_id')->references('id')->on('users');
            $table->foreign('meeting_status_id')->references('id')->on('meeting_statuses');
            $table->date('day');
            $table->integer('hour');
            $table->unique(['first_user_id', 'day','hour']);
            $table->unique(['second_user_id', 'day','hour']);
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
