<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMorocidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morocidades', function (Blueprint $table) {
            $table->id();
            $table->integer('dias_mora');
            $table->integer('valor');
            $table->unsignedBigInteger('id_usuario'); //clave foranea
            $table->timestamps();

            //Definir la clave foranea
            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('morocidades');
    }
}
