<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            "nota1" => 9,
            "nota2" => 9,
            "nota3" => 7,
            "nota4" => 10,
            "parcial" => 8,
            "promedio" => 9,
        ]);
        DB::table('notas')->insert([
            "nota1" => 8,
            "nota2" => 7,
            "nota3" => 7,
            "nota4" => 10,
            "parcial" => 8,
            "promedio" => 8,
        ]);
        DB::table('notas')->insert([
            "nota1" => 8,
            "nota2" => 6,
            "nota3" => 7,
            "nota4" => 8,
            "parcial" => 9,
            "promedio" => 8,
        ]);
        DB::table('notas')->insert([
            "nota1" => 10,
            "nota2" => 10,
            "nota3" => 10,
            "nota4" => 10,
            "parcial" => 9,
            "promedio" => 9.5,
        ]);
        DB::table('notas')->insert([
            "nota1" => 7,
            "nota2" => 6,
            "nota3" => 6,
            "nota4" => 7,
            "parcial" => 8,
            "promedio" => 7,
        ]);
    }
}
