<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\UserType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->text('name');
        });

        UserType::insert([
            'id'=>1,
            'name'=>'admin',
        ]);
        UserType::insert([
            'id'=>2,
            'name'=>'moderador',
        ]);
        UserType::insert([
            'id'=>3,
            'name'=>'pastor',
        ]);
        UserType::insert([
            'id'=>4,
            'name'=>'líder',
        ]);
        UserType::insert([
            'id'=>5,
            'name'=>'asistente',
        ]);
        UserType::insert([
            'id'=>6,
            'name'=>'discípulo',
        ]);
        UserType::insert([
            'id'=>7,
            'name'=>'invitado',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};
