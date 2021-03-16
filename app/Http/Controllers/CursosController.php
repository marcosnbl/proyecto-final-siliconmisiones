<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

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
    public function create() {
        return view('crear');
    }
    public function store(Request $request) {
        $curso= new Curso ();

        $curso-> nombre = $request->nombre;
        
        $curso->imagen = $request->imagen;
        
        $curso->descripcion_corta = $request->descripcion_corta;
        
        $curso->descripcion_larga = $request->descripcion_larga;
        $curso->save();
        return redirect()->route('cursos.showDetails',$curso);
    }
}

