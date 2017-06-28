<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazaTable extends Migration{
    public function up(){
        Schema::create('raza', function (Blueprint $table) {
            $table->integer('Cod_Raza')->index();
            $table->string('Descripcion')->nullable();
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('raza');
    }
}
