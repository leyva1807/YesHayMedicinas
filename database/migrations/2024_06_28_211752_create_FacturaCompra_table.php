<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_compras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero_factura')->unique();
            $table->date('fecha_factura');
            $table->unsignedBigInteger('envio_id');
            $table->decimal('total_factura', 8, 2);
            $table->string('proveedor');
            $table->timestamps();
        });
        //insert datos en la tabla factura_compras
        DB::table('factura_compras')->insert([
            ['numero_factura' => 'F001', 'fecha_factura' => '2022-01-01', 'envio_id' => 1, 'total_factura' => 1000.00, 'proveedor' => 'Proveedor A'],
            ['numero_factura' => 'F002', 'fecha_factura' => '2022-02-01', 'envio_id' => 2, 'total_factura' => 2000.00, 'proveedor' => 'Proveedor B'],
            ['numero_factura' => 'F003', 'fecha_factura' => '2022-03-01', 'envio_id' => 3, 'total_factura' => 3000.00, 'proveedor' => 'Proveedor C'],   
        ]);
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_compras');
    }
}