<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status_name');
            $table->timestamps();
        });
        //insert into productos
        DB::table('status_productos')->insert([
            ['status_name' => 'Activo'],
            ['status_name' => 'Inactivo'],
            ['status_name' => 'Pendiente'],
            ['status_name' => 'Rechazado'],
            ['status_name' => 'Expirado'],
            ['status_name' => 'Eliminado'],
            ['status_name' => 'Agotado'],
            ['status_name' => 'Disponible'],
            ['status_name' => 'No disponible'],            ['status_name' => 'En stock'],            ['status_name' => 'No en stock'],
            ['status_name' => 'En camino'],
            ['status_name' => 'En espera'],
            ['status_name' => 'En proceso']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_productos');
    }
}