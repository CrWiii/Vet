<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{}
    public function run(){
        $this->call(PerfilesSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(SexoSeeder::class);
    }
}
