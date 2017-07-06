<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration{

    public function up(){
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('cod_mascota');
            $table->string('nom_mascota')->nullable();
            $table->integer('cod_cliente')->unsigned()->index();
            $table->integer('cod_tipo')->unsigned()->index();
            $table->integer('cod_sexo')->unsigned()->index();
            $table->string('color')->nullable();
            $table->integer('cod_raza')->unsigned()->index();
            $table->datetime('fec_nacimiento')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('fec_registro')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('cod_sexo')->references('cod_sexo')->on('sexo');
            $table->foreign('cod_cliente')->references('cod_cliente')->on('clientes');
            $table->foreign('cod_tipo')->references('cod_tipo')->on('tipo_mascota');
            $table->foreign('cod_raza')->references('cod_raza')->on('raza');
        });
    }

    public function down(){
        Schema::dropIfExists('mascotas');
    }
}
