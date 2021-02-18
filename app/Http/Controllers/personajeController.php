<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class personajeController extends Controller
{
    public function mostrarPersonaje() {
        $mostrar = DB::table('personajes')->select('nombre', 'descipcion', 'residencia')->get();
        
        return view('personajes', compact('mostrar'));
    }
}
