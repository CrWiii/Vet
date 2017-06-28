<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaTable extends Migration{
    public function up(){
        Schema::create('tipo_mascota', function (Blueprint $table) {
            $table->integer('ID_Consulta')->index();
            $table->datetime('Fec_consulta')->nullable();
            $table->integer('Cod_veterinario')->unsigned()->index();
            $table->integer('Cod_mascota')->unsigned()->index();
            $table->longText('Diagnostico')->nullable();
            $table->longText('Tratamiento')->nullable();
            $table->integer('Fec_proxconsulta')->nullable();
            $table->integer('Observaciones')->nullable();
            $table->integer('Costo')->nullable();
            // $table->integer('Cod_formpago')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('Cod_veterinario')->references('Cod_veterinario')->on('veterinario')->onDelete('cascade');
            $table->foreign('Cod_mascota')->references('Cod_mascota')->on('mascota')->onDelete('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('tipo_mascota');
    }
}
