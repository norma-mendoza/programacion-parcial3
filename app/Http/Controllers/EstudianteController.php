<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Matricula;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('estudiante.index', compact('cursos'));
    }
    
    public function store()
    {
        $nota = Nota::create([
            "nota1" => 0.0,
            "nota2" => 0.0,
            "nota3" => 0.0,
            "nota4" => 0.0,
            "parcial" => 0.0,
            "promedio" => 0.0
        ]);
        Matricula::create([
            "user_id" => Auth::user()->id,
            "curso_id" => request()->curso_id,
            "nota_id" => $nota->id
        ]);
        return redirect()->route('estudiante.index')->with('success','Te has inscrito al curso!!');
    }

    public function notas()
    {
        $notas = DB::table('matriculas')
                        ->join('users','matriculas.user_id','=','users.id')
                        ->join('cursos','matriculas.curso_id','=','cursos.id')
                        ->join('notas','matriculas.nota_id','=','notas.id')
                        ->where('matriculas.user_id',Auth::user()->id)
                        ->get();
        return view('estudiante.notas',compact('notas'));
    }
   
}
