<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration{

    public function up(){
        Schema::create('mascota', function (Blueprint $table) {
            $table->integer('Cod_mascota')->index();
            $table->string('Nom_mascota')->nullable();
            $table->integer('Cod_cliente')->unsigned()->index();
            $table->integer('Cod_tipo')->unsigned()->index();
            $table->integer('Cod_sexo')->unsigned()->index();
            $table->string('Color')->nullable();
            $table->integer('Cod_raza')->unsigned()->index();
            $table->datetime('Fec_nacimiento')->nullable();
            $table->string('Observaciones')->nullable();
            $table->string('Fec_registro')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('Cod_sexo')->references('Cod_sexo')->on('sexo')->onDelete('cascade');
            $table->foreign('Cod_cliente')->references('Cod_cliente')->on('cliente')->onDelete('cascade');
            $table->foreign('Cod_tipo')->references('Cod_tipo')->on('tipo_mascota')->onDelete('cascade');
            $table->foreign('Cod_sexo')->references('Cod_sexo')->on('sexo')->onDelete('cascade');
            $table->foreign('Cod_raza')->references('Cod_raza')->on('raza')->onDelete('cascade');
        });
    }

    public function down(){
        Schema::dropIfExists('mascota');
    }
}
