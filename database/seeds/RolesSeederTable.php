<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //DB::table('roles')->truncate();
        DB::table('roles')->insert([
            "role"=>"Administrador",
            "descrip" => "Previlegios avanzados",
        ]);
        
        DB::table('roles')->insert([
            "role"=>"Profesor",
            "descrip" => "Previlegios avanzados",
        ]);
        DB::table('roles')->insert([
            "role"=>"Estudiante",
            "descrip" => "Previlegios avanzados",
        ]);
    }
}
