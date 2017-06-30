<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadTable extends Migration{
    public function up(){
        Schema::create('especialidad', function (Blueprint $table) {
            $table->increments('Cod_especialidad');
            $table->string('Descripcion')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
        

    }

    public function down(){
        Schema::dropIfExists('especialidad');
    }
}
