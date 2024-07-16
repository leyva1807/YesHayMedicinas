<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesMedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades_medida', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });
        // Insert default unidades de medida de medicamentos
        DB::table('unidades_medida')->insert([

            ['nombre' => 'blister'],
            ['nombre' => 'tableta'],
            ['nombre' => 'tuvo'],
            ['nombre' => 'ampolla'],
            ['nombre' => 'gotas'],
            ['nombre' => 'droga'],
            ['nombre' => 'comprimidos'],
            ['nombre' => 'gotas inyectables'],
            ['nombre' => 'pastillas'],
            ['nombre' => 'jarabe'],
            ['nombre' => 'lote'],
            ['nombre' => 'unidades'],
            ['nombre' => 'cajas'],
            ['nombre' => 'paquetes'],
            ['nombre' => 'frascos'],
            ['nombre' => 'cajas de paquetes'],
            ['nombre' => 'cajas de envases'],
            ['nombre' => 'paquetes de envases'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades_medida');
    }
}