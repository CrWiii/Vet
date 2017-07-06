<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinarioTable extends Migration{
    public function up(){
        Schema::create('veterinario', function (Blueprint $table) {
            $table->increments('cod_veterinario');
            $table->string('nom_veterinario')->nullable();
            $table->string('ape_veterinario')->nullable();
            $table->string('dni')->nullable();
            $table->string('direccion')->nullable();
            $table->string('tel_veterinario')->nullable();
            $table->integer('cod_sexo')->unsigned()->index();
            $table->integer('cod_especialidad')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('cod_sexo')->references('cod_sexo')->on('sexo');
            $table->foreign('cod_especialidad')->references('cod_especialidad')->on('especialidad');
        });
    }

    public function down(){
        Schema::dropIfExists('veterinario');
    }
}
