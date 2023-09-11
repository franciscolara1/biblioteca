<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('img');
            $table->longText('descripcion');
            $table->string('editorial');
            $table->integer('ano');
            $table->integer('stock');
            $table->unsignedBigInteger('categoria_id'); // Clave foránea
        
            // Definir la clave foránea
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
