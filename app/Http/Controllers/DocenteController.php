<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocenteController extends Controller
{
    public function __construct()
    {
        return $this->middleware('roles:1,2');
    }
    public function index()
    {
        $cursos = Curso::where('user_id',Auth::user()->id)->get();
        return view('profesor.index',compact('cursos'));
    }
}
