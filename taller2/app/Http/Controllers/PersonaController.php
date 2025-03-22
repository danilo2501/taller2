<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        // Lista de objetos Persona
        $personas = [
            (object) ["nombre" => "Diego Ruales", "edad" => 25, "rol" => "Estudiante"],
            (object) ["nombre" => "Ana Gabriela", "edad" => 35, "rol" => "Docente"],
            (object) ["nombre" => "Luis Arturo Rosado", "edad" => 40, "rol" => "Coordinador"]
        ];

        // Enviar la lista a la vista
        return view('personas', compact('personas'));
    }
}