<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ModificarController extends Controller
{
  

     public function edit($id)
    {	

    	$usuario = User::find($id);
       return view('modificarDatos')->with(compact('usuario'));
    }

      public function update(Request $request, $id)
    {	

    	$file= $data['imagen'];
        $path = public_path() . '/images/usuario';
        $fileName=uniqid().$file->getClientOriginalName();
        $moved = $file->move($path, $fileName);
    	
    	$usuario = User::find($id);
    	$usuario->nombre = $request->input('nombre');
    	$usuario->apellido = $request->input('apellido');
       	$usuario->password = $request->input('password');

    }
}
