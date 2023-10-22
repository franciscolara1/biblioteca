<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->integer('dias');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_termino');


            $table->unsignedBigInteger('id_libro'); // Clave foránea
            $table->unsignedBigInteger('id_sede'); // Clave foránea
            $table->unsignedBigInteger('id_user'); // Clave foránea
        
            // Definir la clave foránea
            $table->foreign('id_libro')->references('id')->on('libros');
            $table->foreign('id_sede')->references('id')->on('sedes');
            $table->foreign('id_user')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
