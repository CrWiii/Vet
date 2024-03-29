<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSexoTable extends Migration{

    public function up(){
        Schema::create('sexo', function (Blueprint $table) {
            $table->increments('cod_sexo');
            $table->string('descripcion')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
        

    }

    public function down(){
        Schema::dropIfExists('sexo');
    }
}
