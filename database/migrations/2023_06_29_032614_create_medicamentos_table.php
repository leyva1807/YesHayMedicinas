<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('unidad_medida_id');
            $table->unsignedBigInteger('categoria_id');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('status_product_id');
            $table->string('imagen')->nullable();
            $table->integer('stock')->default(0);
            $table->timestamps(0);

            // Indexes
            $table->index('unidad_medida_id', 'medicamentos_unidad_medida_id_foreign');
            $table->index('marca_id', 'medicamentos_marca_id_foreign');
            $table->index('status_product_id', 'medicamentos_status_product_id_foreign');
            $table->index('categoria_id', 'medicamentos_categoria_id_index');

            // Foreign keys
            $table->foreign('categoria_id', 'medicamentos_categoria_id_foreign')
                ->references('id')->on('categoria_medicamento')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->foreign('marca_id', 'medicamentos_marca_id_foreign')
                ->references('id')->on('marcas')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('status_product_id', 'medicamentos_status_products_id_foreign')
                ->references('id')->on('status_productos');

            $table->foreign('unidad_medida_id', 'medicamento_unidad_medida_id_foreign')
                ->references('id')->on('unidades_medida')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
        });

        // Insertar registros en la tabla
        DB::table('medicamentos')->insert([
            ['nombre' => 'Aspirina', 'unidad_medida_id' => 1, 'categoria_id' => 1, 'descripcion' => 'Descripcion aspirina', 'marca_id' => 1, 'status_product_id' => 1, 'imagen' => 'aspirina.jpg', 'stock' => 100],
            ['nombre' => 'Ibuprofen', 'unidad_medida_id' => 2, 'categoria_id' => 2, 'descripcion' => 'Descripcion ibuprofen', 'marca_id' => 2, 'status_product_id' => 2, 'imagen' => 'ibuprofen.jpg', 'stock' => 50],
            ['nombre' => 'Paracetamol', 'unidad_medida_id' => 3, 'categoria_id' => 3, 'descripcion' => 'Descripcion paracetamol', 'marca_id' => 3, 'status_product_id' => 3, 'imagen' => 'paracetamol.jpg', 'stock' => 200],
            ['nombre' => 'Diclofenac', 'unidad_medida_id' => 4, 'categoria_id' => 4, 'descripcion' => 'Descripcion diclofenac', 'marca_id' => 4, 'status_product_id' => 4, 'imagen' => 'diclofenac.jpg', 'stock' => 150],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}