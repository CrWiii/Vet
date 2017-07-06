<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PerfilesSeeder extends Seeder{
      public function run(){
            DB::table('perfil')->insert([
                        'descripcion'     => 'admin',
                        'state'           => true,
                        'created_by'      => 1,
                        'created_at'      => Carbon::now(),
                        'updated_by'      => 1,
                        'updated_at'      => Carbon::now(),
                  ]);
            DB::table('perfil')->insert([
                        'descripcion'     => 'Cliente',
                        'state'           => true,
                        'created_by'      => 1,
                        'created_at'      => Carbon::now(),
                        'updated_by'      => 1,
                        'updated_at'      => Carbon::now(),
                  ]);
            DB::table('perfil')->insert([
                        'descripcion'     => 'Veterinario',
                        'state'           => true,
                        'created_by'      => 1,
                        'created_at'      => Carbon::now(),
                        'updated_by'      => 1,
                        'updated_at'      => Carbon::now(),
                  ]);
            DB::table('perfil')->insert([
                        'descripcion'     => 'Asistente',
                        'state'           => true,
                        'created_by'      => 1,
                        'created_at'      => Carbon::now(),
                        'updated_by'      => 1,
                        'updated_at'      => Carbon::now(),
                  ]);
      }
}
