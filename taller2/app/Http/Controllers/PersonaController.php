<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        // Lista de objetos Persona
        $personas = [
            (object) ["nombre" => "Carmen Espinoza", "edad" => 19, "rol" => "Estudiante"],
            (object) ["nombre" => "Julian Acosta", "edad" => 29, "rol" => "Docente"],
            (object) ["nombre" => "Andres Hidalgo", "edad" => 42, "rol" => "Coordinador"]
        ];

        // Enviar la lista a la vista
        return view('personas', compact('personas'));
    }
}