<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    
    public function registrar(Request $request){
        $autor = new Autor();
        $autor->nombre = $request->nombre;
        $autor->save();
        return back();
    }

    public function index(){
        $autores = Autor::where('estado', true)->get();
        return view('persona.autor', compact('autores'));
    }

    public function eliminar($id){
        $autor= Autor::find($id);
        if($autor){
            $autor->estado= false;
            $autor->save();
            return back();
        }
    }

    public function actualizar($id, Request $request){
         $autor = Autor::find($id);
         if($autor){
            $autor->nombre= $request->nombre;
            $autor->save();
            return redirect('/');
         }
    }

    public function showautor($id){
        $autor= Autor::find($id);
        return view('persona.personaedit', compact('autor'));
    }
}
