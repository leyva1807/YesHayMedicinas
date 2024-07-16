<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Add this line to import the DB facade

class CreateMonedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monedas', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de la moneda'); // Llave primaria con comentario
            $table->string('nombre'); // Nombre de la moneda, único
            $table->string('codigo', 3); // Código de la moneda, único y de 3 caracteres
            $table->timestamps(); // Campos created_at y updated_at

            // Índices únicos
            $table->unique('nombre', 'monedas_nombre_unique');
            $table->unique('codigo', 'monedas_codigo_unique');
        });
        //insertar valores en la tabla
        DB::table('monedas')->insert([
            ['nombre' => 'Dólar estadounidense', 'codigo' => 'USD'],
            ['nombre' => 'pesos cubanos', 'codigo' => 'CUP'],
            ['nombre' => 'Moneda libre convertible', 'codigo' => 'MLC'],       
            ['nombre' => 'Euro', 'codigo' => '€'],
            ['nombre' => 'Sol peruano', 'codigo' => 'SOL']
        ]);            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monedas');
    }
}
