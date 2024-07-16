<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_medicamento', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category_description');
            $table->timestamps();
        });
        // Insertar datos en la tabla
        DB::table('categoria_medicamento')->insert(['name' => 'Analgésicos', 'category_description' => 'Medicamentos para el dolor']); 
        DB::table('categoria_medicamento')->insert(['name' => 'Antibióticos', 'category_description' => 'Medicamentos para infecciones bacterianas']);
        DB::table('categoria_medicamento')->insert(['name' => 'Antihistamínicos', 'category_description' => 'Medicamentos para el dolor y gripe']);
        DB::table('categoria_medicamento')->insert(['name' => 'Anticonvulsivantes', 'category_description' => 'Medicamentos para la ansiedad y depresión']);
        DB::table('categoria_medicamento')->insert(['name' => 'Antidepresivos', 'category_description' => 'Medicamentos para la ansiedad']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_medicamento');
    }
}