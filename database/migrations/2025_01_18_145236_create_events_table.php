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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->foreignId('event_type_id');
            $table->text('locationname');
            $table->text('address');
            $table->text('registerlink')->nullable();
            $table->text('city_id')->nullable();
            $table->text('city')->nullable();
            $table->timestamp('starttime');
            $table->timestamp('endtime')->nullable();
            $table->text('photopath')->nullable();
            $table->timestamps();
            //constraints
            $table->foreign('event_type_id')->references('id')->on('event_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
