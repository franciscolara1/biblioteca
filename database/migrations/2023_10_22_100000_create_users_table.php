<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('carrera');
            $table->rememberToken();
            $table->timestamps();

            $table->unsignedBigInteger('id_sede'); // Clave foránea
            $table->unsignedBigInteger('id_rol'); // Clave foránea
        
            // Definir la clave foránea
            $table->foreign('id_sede')->references('id')->on('sedes');
            $table->foreign('id_rol')->references('id')->on('perfiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
