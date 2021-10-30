<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($curso = null)
    {
        $estudiantes = DB::table('matriculas')
                        ->join('users','matriculas.user_id','=','users.id')
                        ->join('cursos','matriculas.curso_id','=','cursos.id')
                        ->join('notas','matriculas.nota_id','=','notas.id')
                        ->where('cursos.id',$curso)
                        ->get();
        return view('profesor.nota',compact('estudiantes'));
    }
    
    public function edit($nota)
    {
        $estudiantes = DB::table('matriculas')
                        ->join('users','matriculas.user_id','=','users.id')
                        ->join('cursos','matriculas.curso_id','=','cursos.id')
                        ->join('notas','matriculas.nota_id','=','notas.id')
                        ->where('matriculas.nota_id',$nota)
                        ->get();
        return view('profesor.edit',compact('estudiantes'));
    }
    public function update(Nota $nota,$curso_id)
    {
        $data = request()->all();

        //Calcular promedio

        $promedio = (request()->nota1 + request()->nota2 + request()->nota3 + request()->nota4 + request()->parcial) / 5;

        $data['promedio'] = $promedio;
        $nota->update($data);


        return redirect()->route('nota.index',$curso_id);
    }
}
