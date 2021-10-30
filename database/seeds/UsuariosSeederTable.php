<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "nombre"=>"Administrador",
            "apellido" => "Mendoza",
            "fechaNacimiento" => "2000-10-10",
            "direccion" => "La libertad",
            "dui" => "08126783-5",
            "genero" => "M",
            "telefono" => 75632187,
            "email" => "admin1@gmail.com",
            "password" => bcrypt('admin1'),
            "role_id" => 1,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Kevin",
            "apellido" => "Lemus",
            "fechaNacimiento" => "2000-06-10",
            "direccion" => "Sonsonate",
            "dui" => "12345678-0",
            "genero" => "M",
            "telefono" => 76743240,
            "email" => "docente1@gmail.com",
            "password" => bcrypt('docente1'),
            "role_id" => 2,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Yureily",
            "apellido" => "Sanchez",
            "fechaNacimiento" => "1997-10-10",
            "direccion" => "Cuscatlan",
            "dui" => "76432189-1",
            "genero" => "M",
            "telefono" => 78543219,
            "email" => "estudiante1@gmail.com",
            "password" => bcrypt('estudiante1'),
            "role_id" => 3,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Cristina",
            "apellido" => "Martinez",
            "fechaNacimiento" => "2000-10-10",
            "direccion" => "La Paz",
            "dui" => "56787434-0",
            "genero" => "F",
            "telefono" => 70743215,
            "email" => "estudiante2@gmail.com",
            "password" => bcrypt('estudiante2'),
            "role_id" => 3,
        ]);
        DB::table('users')->insert([
            "nombre"=>"Carlos",
            "apellido" => "Menjivar",
            "fechaNacimiento" => "2000-11-10",
            "direccion" => "San Miguel",
            "dui" => "56432174-5",
            "genero" => "M",
            "telefono" => 70568900,
            "email" => "docente2@gmail.com",
            "password" => bcrypt('docente2'),
            "role_id" => 2,
        ]);
    }
}
