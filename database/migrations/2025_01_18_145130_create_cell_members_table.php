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
        Schema::create('cell_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cell_id');
            $table->foreignId('user_id');
            $table->timestamps();
            //constraints
            $table->foreign('cell_id')->references('id')->on('cells');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unique(['cell_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cell_members');
    }
};
