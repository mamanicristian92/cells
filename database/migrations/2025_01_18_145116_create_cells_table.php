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
        Schema::create('cells', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('leader_id');
            $table->text('address');
            $table->foreignId('country_id')->nullable();
            $table->foreignId('state_id')->nullable();
            $table->text('city')->nullable();
            $table->timestamps();
            //constraints
            $table->foreign('leader_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cells');
    }
};
