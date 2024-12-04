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
        Schema::create('user_studies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('registrationDate');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('studies_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('studies_id')->references('id')->on('studies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_studies');
    }
};
