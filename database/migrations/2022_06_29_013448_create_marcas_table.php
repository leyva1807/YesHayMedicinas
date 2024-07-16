<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Add this line to import the DB class

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    
            // insertar datos en la tabla marcas
            DB::table('marcas')->insert([
                ['nombre' => 'Medicina General'],
                ['nombre' => 'Dental'],
                ['nombre' => 'Farmacia'],
                ['nombre' => 'Estética'],
                ['nombre' => 'Medicamentos para el día a día'],
            ]);
            //insertar datos en la tabla marcas
            DB::table('marcas')->insert([
                ['nombre' => 'Alimentos'],
                ['nombre' => 'Limpieza'],
                ['nombre' => 'Higiene'],
                ['nombre' => 'Belleza'],
                ['nombre' => 'Salud y bienestar'],
            ]);
            
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marcas');
    }
    
};

  