<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilTable extends Migration{

    public function up(){
        Schema::create('perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->boolean('state')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('perfil');
    }
    }
}
