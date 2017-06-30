<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinarioTable extends Migration{
    public function up(){
        Schema::create('veterinario', function (Blueprint $table) {
            $table->increments('Cod_veterinario');
            $table->string('Nom_veterinario')->nullable();
            $table->string('Ape_veterinario')->nullable();
            $table->string('DNI')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Tel_veterinario')->nullable();
            $table->integer('Cod_sexo')->unsigned()->index();
            $table->integer('Cod_especialidad')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('Cod_sexo')->references('Cod_sexo')->on('sexo');
            $table->foreign('Cod_especialidad')->references('Cod_especialidad')->on('especialidad');
        });
    }

    public function down(){
        Schema::dropIfExists('veterinario');
    }
}
