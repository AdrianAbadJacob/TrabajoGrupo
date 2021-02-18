<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personajeController extends Controller
{
    public function mostrarPersonaje() {
        $mostrar = DB::table('entradas')->select('entrada', 'fechaCreado')->orderByDesc('idEntrada')->get();
    }
}
