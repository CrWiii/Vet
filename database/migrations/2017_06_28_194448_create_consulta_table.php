<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaTable extends Migration{
    public function up(){
        Schema::create('consulta', function (Blueprint $table) {
            $table->increments('ID_Consulta');
            $table->datetime('Fec_consulta')->nullable();
            $table->integer('Cod_veterinario')->unsigned()->index();
            $table->integer('Cod_mascota')->unsigned()->index();
            $table->longText('Diagnostico')->nullable();
            $table->longText('Tratamiento')->nullable();
            $table->integer('Fec_proxconsulta')->nullable();
            $table->integer('Observaciones')->nullable();
            $table->integer('Costo')->nullable();
            $table->integer('Cod_formpago')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('Cod_veterinario')->references('Cod_veterinario')->on('veterinario');
            $table->foreign('Cod_mascota')->references('Cod_mascota')->on('mascotas');
        });
    }

    public function down(){
        Schema::dropIfExists('consulta');
    }
}
