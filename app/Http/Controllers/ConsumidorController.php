<?php

namespace App\Http\Controllers;

use App\consumidor;
use Illuminate\Http\Request;

class ConsumidorController extends Controller
{
    public function create()
    {
        return view('consumidor.create');

    }

    public function store(Request $request)
    {
        //
        $cliente= new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->num_documento = $request->num_documento;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->save();
        return Redirect::to("cliente");
    }
    
}
