<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class personasController extends Controller
{
    public function mostrarPersonas() {
    	$personas = Persona::all();
    	return view('listadopersonas', compact('personas'));
    }

    /*public function mostrarUsuario($id) {
    	$persona = Persona::find($id);

    	return $persona;
    }*/

    public function nuevaPersona() {
    	return view('nuevapersona');
    }


    public function registrar(Request $request) {
        $persona = new Persona;

        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->email = $request->input('email');
        $persona->save();

        return redirect('/personas');
    }

    public function editarPersona($id) {
        $persona = Persona::find($id);
        return view('editarpersona', compact('persona'));
    }

    public function update(Request $request, $id) {
        $persona = Persona::find($id);
        
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->email = $request->input('email');
        $persona->save();

        return redirect('/personas');
    }

    public function borrarPersona($id) {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect('/personas');
    }
}
