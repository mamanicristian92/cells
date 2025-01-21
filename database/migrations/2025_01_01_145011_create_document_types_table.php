<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DocumentType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('document_types', function (Blueprint $table) {
            $table->id();
            $table->text('name');
        });

        DocumentType::insert([
			'id' => 1,
			'name' => 'DNI',
		]);
		DocumentType::insert([
			'id' => 2,
			'name' => 'Pasaporte',
		]);
        DocumentType::insert([
			'id' => 3,
			'name' => 'Otro',
		]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_types');
    }
};
