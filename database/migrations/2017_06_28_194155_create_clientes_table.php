<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration{
    public function up(){
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('Cod_Cliente');
            $table->string('Nom_cliente')->nullable();
            $table->string('Ape_cliente')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Tel_cliente')->nullable();
            $table->string('DNI')->nullable();
            $table->integer('Cod_sexo')->unsigned()->index();
            $table->string('Email')->nullable();
            $table->string('Sitio_web')->nullable();
            $table->string('Num_registro')->nullable();
            $table->string('Fec_registro')->nullable();
            $table->string('Giro')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('Cod_sexo')->references('Cod_sexo')->on('sexo');
        });
    }

    public function down(){
        Schema::dropIfExists('clientes');
    }
}
