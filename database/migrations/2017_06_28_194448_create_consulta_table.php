<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaTable extends Migration{
    public function up(){
        Schema::create('consulta', function (Blueprint $table) {
            $table->increments('id_consulta');
            $table->datetime('fec_consulta')->nullable();
            $table->integer('cod_veterinario')->unsigned()->index();
            $table->integer('cod_mascota')->unsigned()->index();
            $table->longText('diagnostico')->nullable();
            $table->longText('tratamiento')->nullable();
            $table->integer('fec_proxconsulta')->nullable();
            $table->integer('observaciones')->nullable();
            $table->integer('costo')->nullable();
            $table->integer('cod_formpago')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('cod_veterinario')->references('cod_veterinario')->on('veterinario');
            $table->foreign('cod_mascota')->references('cod_mascota')->on('mascotas');
        });
    }

    public function down(){
        Schema::dropIfExists('consulta');
    }
}
