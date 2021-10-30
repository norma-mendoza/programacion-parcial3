<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            "nombreCurso" => "Software Libre",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Desarrollo Web",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Programacion II",
            "year" => 2021,
            "ciclo" => 1,
            "user_id" => 2
        ]);
        DB::table('cursos')->insert([
            "nombreCurso" => "Redes II",
            "year" => 2021,
            "ciclo" => 2,
            "user_id" => 5
        ]);
    }
}
