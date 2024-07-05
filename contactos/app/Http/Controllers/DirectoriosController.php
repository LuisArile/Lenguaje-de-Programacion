<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectoriosController extends Controller
{
    public function mostrarDatos(){
        $contactos = Contacto::all();
        return view('directorio', compact('contactos')) ;
    }
}
