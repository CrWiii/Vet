<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsuariosSeeder extends Seeder{
      public function run(){
            DB::table('users')->insert([
                  'name'            => 'Cristhian Sevilla',
                  'email'           => 'cgjsl89@gmail.com',
                  'password'        => bcrypt('123123123'),
                  'profile_id'      => 1,
                  'state'           => true,
                  'created_by'      => 1,
                  'created_at'      => Carbon::now(),
                  'updated_by'      => 1,
                  'updated_at'      => Carbon::now(),
                  ]);
      }
}
