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
            $table->string('nombre',80);
            $table->string('ap_pat',80);
            $table->string('ap_mat',80);
            $table->string('email',80);
            $table->string('telefono',20);
            $table->string('direccion',80);
            $table->foreignId('id_pais')->references('id')->on('paises');
            $table->foreignId('id_entidad')->references('id')->on('entidades');
            $table->foreignId('id_tipo_usu')->references('id')->on('tipos_usuario');
            $table->string('colonia',80);
            $table->integer('cp');
            $table->date('fecha_naci');
            $table->string('username',80);
            $table->string('password',80);
            $table->integer('status');
            $table->timestamps();
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
