<?php

use App\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeederTable::class);
        $this->call(UsuariosSeederTable::class);
        $this->call(CursoSeeder::class);
        $this->call(NotaSeeder::class);
        $this->call(MatriculaSeeder::class);
    }
}
