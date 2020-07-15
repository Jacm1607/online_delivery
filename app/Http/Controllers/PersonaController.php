<?php

namespace App\Http\Controllers;

use App\Persona;
use App\User;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function create()
    {
        return view('from.cliente');

    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->Nombre; 
        $persona->apellido = $request->Apellido; 
        $persona->direccion = $request->Direccion; 
        $persona->ubicacion = $request->Ubicacion; 
        $persona->celular = $request->Celular; 
        $persona->celular2 = $request->Celular2; 

        $persona->save();

        $user = new User();
        $user->name = $persona->id;
        $user->email = $request->Correo;
        $user->password = $request->Contraseña;
        $user->save();
        return view('welcome');
        // $persona->nombre = $request->Nombre; 
        // dd($request->all());
    }
    
}
