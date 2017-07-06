<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration{
    public function up(){
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('cod_Cliente');
            $table->string('nom_cliente')->nullable();
            $table->string('ape_cliente')->nullable();
            $table->string('direccion')->nullable();
            $table->string('tel_cliente')->nullable();
            $table->string('dni')->nullable();
            $table->integer('cod_sexo')->unsigned()->index();
            $table->string('email')->nullable();
            $table->string('sitio_web')->nullable();
            $table->string('num_registro')->nullable();
            $table->string('fec_registro')->nullable();
            $table->string('giro')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('cod_sexo')->references('cod_sexo')->on('sexo');
        });
    }

    public function down(){
        Schema::dropIfExists('clientes');
    }
}
