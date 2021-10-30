<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matriculas')->insert([
            "user_id" => 3,
            "curso_id" => 1,
            "nota_id" => 1
        ]);
        DB::table('matriculas')->insert([
            "user_id" => 3,
            "curso_id" => 2,
            "nota_id" => 2
        ]);
        DB::table('matriculas')->insert([
            "user_id" => 4,
            "curso_id" => 2,
            "nota_id" => 4
        ]);
        DB::table('matriculas')->insert([
            "user_id" => 4,
            "curso_id" => 4,
            "nota_id" => 5
        ]);
    }
}
