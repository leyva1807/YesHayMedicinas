<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios', function (Blueprint $table) {
            $table->bigIncrements('id');                                
            $table->date('fecha_envio');            
            $table->date('fecha_entrega');         
           
            $table->timestamps(0);                   
        });
        //insert datos en la tabla envios
        DB::table('envios')->insert([
            ['fecha_envio' => '2023-06-29', 'fecha_entrega' => '2023-07-06'],
            ['fecha_envio' => '2023-07-06', 'fecha_entrega' => '2023-07-13'],
            ['fecha_envio' => '2023-07-13', 'fecha_entrega' => '2023-07-20'],
        ]);
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
    }
}