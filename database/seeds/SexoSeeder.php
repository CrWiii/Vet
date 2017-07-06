<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SexoSeeder extends Seeder{
      public function run(){
            DB::table('sexo')->insert([
                        'Descripcion'     => 'Masculino',
                        'state'           => true,
                        'created_by'      => 1,
                        'created_at'      => Carbon::now(),
                        'updated_by'      => 1,
                        'updated_at'      => Carbon::now(),
                  ]);
            DB::table('sexo')->insert([
                        'Descripcion'     => 'Femenino',
                        'state'           => true,
                        'created_by'      => 1,
                        'created_at'      => Carbon::now(),
                        'updated_by'      => 1,
                        'updated_at'      => Carbon::now(),
                  ]);
            
      }
}
