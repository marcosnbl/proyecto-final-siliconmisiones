<?php

namespace App\Http\Controllers;

use App\Models\Curso;

class CursosController extends Controller
{
    public function index() {
        $cursos = Curso::all()->toArray();

        return view('cursos', ['cursos' => $cursos]);
    }
    
    public function showDetails($id) {
        $curso= Curso::find($id)->toArray();
        return view('detalles', ['curso' => $curso]);
    }
}

