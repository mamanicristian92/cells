<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('country_id');
            //constraints
            $table->foreign('country_id')->references('id')->on('countries');
        });

        DB::table('states')->insert([
            //Provincias Argentinas
            [
                'name' => 'Buenos Aires',
                'country_id' => '1'
            ],
            [
                'name' => 'Ciudad Autónoma de Buenos Aires',
                'country_id' => '1'
            ],
            [
                'name' => 'Catamarca',
                'country_id' => '1'
            ],
            [
                'name' => 'Chaco',
                'country_id' => '1'
            ],
            [
                'name' => 'Chubut',
                'country_id' => '1'
            ],
            [
                'name' => 'Córdoba',
                'country_id' => '1'
            ],
            [
                'name' => 'Corrientes',
                'country_id' => '1'
            ],
            [
                'name' => 'Entre Ríos',
                'country_id' => '1'
            ],
            [
                'name' => 'Formosa',
                'country_id' => '1'
            ],
            [
                'name' => 'Jujuy',
                'country_id' => '1'
            ],
            [
                'name' => 'La Pampa',
                'country_id' => '1'
            ],
            [
                'name' => 'La Rioja',
                'country_id' => '1'
            ],
            [
                'name' => 'Mendoza',
                'country_id' => '1'
            ],
            [
                'name' => 'Misiones',
                'country_id' => '1'
            ],
            [
                'name' => 'Neuquén',
                'country_id' => '1'
            ],
            [
                'name' => 'Río Negro',
                'country_id' => '1'
            ],
            [
                'name' => 'Salta',
                'country_id' => '1'
            ],
            [
                'name' => 'San Juan',
                'country_id' => '1'
            ],
            [
                'name' => 'San Luis',
                'country_id' => '1'
            ],
            [
                'name' => 'Santa Cruz',
                'country_id' => '1'
            ],
            [
                'name' => 'Santa Fe',
                'country_id' => '1'
            ],
            [
                'name' => 'Santiago del Estero',
                'country_id' => '1'
            ],
            [
                'name' => 'Tierra del Fuego',
                'country_id' => '1'
            ],
            [
                'name' => 'Tucumán',
                'country_id' => '1'
            ],
            //departamentos de Bolivia
            [
                'name' => 'Beni',
                'country_id' => '2'
            ],
            [
                'name' => 'Chuquisaca',
                'country_id' => '2'
            ],
            [
                'name' => 'Cochabamba',
                'country_id' => '2'
            ],
            [
                'name' => 'La Paz',
                'country_id' => '2'
            ],
            [
                'name' => 'Oruro',
                'country_id' => '2'
            ],
            [
                'name' => 'Pando',
                'country_id' => '2'
            ],
            [
                'name' => 'Potosí',
                'country_id' => '2'
            ],
            [
                'name' => 'Santa Cruz',
                'country_id' => '2'
            ],
            [
                'name' => 'Tarija',
                'country_id' => '2'
            ],
            //Provincias de Brasil
            [
                'name' => 'Alagoas',
                'country_id' => '3'
            ],
            [
                'name' => 'Amazonas',
                'country_id' => '3'
            ],
            [
                'name' => 'Bahía',
                'country_id' => '3'
            ],
            [
                'name' => 'Ceará',
                'country_id' => '3'
            ],
            [
                'name' => 'Cisplatina',
                'country_id' => '3'
            ],
            [
                'name' => 'ESpírito Santo',
                'country_id' => '3'
            ],
            [
                'name' => 'Goiás',
                'country_id' => '3'
            ],
            [
                'name' => 'Gran Pará',
                'country_id' => '3'
            ],

            [
                'name' => 'Maranhao',
                'country_id' => '3'
            ],
            [
                'name' => 'Mateo Grosso',
                'country_id' => '3'
            ],
            [
                'name' => 'Minas Gerais',
                'country_id' => '3'
            ],
            [
                'name' => 'Paraná',
                'country_id' => '3'
            ],
            [
                'name' => 'Paraíba',
                'country_id' => '3'
            ],
            [
                'name' => 'Pernambuco',
                'country_id' => '3'
            ],
            [
                'name' => 'Piauí',
                'country_id' => '3'
            ],
            [
                'name' => 'Río de Janeiro',
                'country_id' => '3'
            ],
            [
                'name' => 'Río Grande del Norte',
                'country_id' => '3'
            ],
            [
                'name' => 'Río Grande del Sur',
                'country_id' => '3'
            ],
            [
                'name' => 'Santa Catarina',
                'country_id' => '3'
            ],
            [
                'name' => 'Sao Paulo',
                'country_id' => '3'
            ],
            [
                'name' => 'Sergipe',
                'country_id' => '3'
            ],
            [
                'name' => 'Municipio Neutro',
                'country_id' => '3'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
