<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinarioTable extends Migration{
    public function up(){
        Schema::create('veterianrio', function (Blueprint $table) {
            $table->integer('Cod_veterinario')->index();
            $table->string('Nom_veterinario')->nullable();
            $table->string('Ape_veterinario')->nullable();
            $table->string('DNI')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Tel_veterinario')->nullable();
            $table->integer('Cod_sexo')->unsigned()->index();
            $table->string('Cod_especialidad')->unsigned()->index();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('Cod_sexo')->references('Cod_sexo')->on('sexo')->onDelete('cascade');
            $table->foreign('Cod_especialidad')->references('Cod_especialidad')->on('especialidad')->onDelete('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('veterinario');
    }
}
