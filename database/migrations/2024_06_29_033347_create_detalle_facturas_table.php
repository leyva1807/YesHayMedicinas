<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('factura_compra_id');
            $table->unsignedBigInteger('medicamento_id');
            $table->unsignedBigInteger('categoria_medicamento_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->decimal('precio_total', 8, 2);
            $table->string('imagen')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->timestamps();

            // Indexes
            $table->index('factura_compra_id', 'detalle_facturas_factura_compra_id_foreign');
            $table->index('medicamento_id', 'detalle_facturas_medicamento_id_foreign');
            $table->index('categoria_medicamento_id', 'detalle_facturas_categoria_medicamento_id_foreign');

            // Foreign keys
            $table->foreign('factura_compra_id', 'detalle_facturas_factura_compra_id_foreign')
                ->references('id')->on('factura_compras')
                ->onUpdate('NO ACTION')
                ->onDelete('CASCADE');

            $table->foreign('medicamento_id', 'detalle_facturas_medicamento_id_foreign')
                ->references('id')->on('medicamentos')
                ->onUpdate('NO ACTION')
                ->onDelete('CASCADE');

            $table->foreign('categoria_medicamento_id', 'detalle_facturas_categoria_medicamento_id_foreign')
                ->references('id')->on('categoria_medicamento')
                ->onUpdate('NO ACTION')
                ->onDelete('CASCADE');
        });

        // Insertar registros en la tabla
        DB::table('detalle_facturas')->insert([
            [
                'factura_compra_id' => 1,
                'medicamento_id' => 1,
                'categoria_medicamento_id' => 1,
                'cantidad' => 2,
                'precio_unitario' => 50.00,
                'precio_total' => 100.00,
                'imagen' => 'imagen1.jpg',
                'fecha_vencimiento' => '2023-06-29',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'factura_compra_id' => 2,
                'medicamento_id' => 2,
                'categoria_medicamento_id' => 2,
                'cantidad' => 3,
                'precio_unitario' => 60.00,
                'precio_total' => 180.00,
                'imagen' => 'imagen2.jpg',
                'fecha_vencimiento' => '2023-07-06',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'factura_compra_id' => 3,
                'medicamento_id' => 3,
                'categoria_medicamento_id' => 3,
                'cantidad' => 4,
                'precio_unitario' => 70.00,
                'precio_total' => 280.00,
                'imagen' => 'imagen3.jpg',
                'fecha_vencimiento' => '2023-07-13',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_facturas');
    }
}