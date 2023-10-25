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
            $table->unsignedBigInteger('autor_id'); // Clave foránea
            $table->string('img');
            $table->longText('descripcion');
            $table->unsignedBigInteger('editorial_id'); // Clave foránea
            $table->string('ano');
            $table->unsignedBigInteger('categoria_id'); // Clave foránea
        
            // Definir la clave foránea
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('editorial_id')->references('id')->on('editoriales');
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
