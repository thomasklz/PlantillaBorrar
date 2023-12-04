<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Autor;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
       $autores=Autor::where('estado', true)->get();

        $libros = DB::table('libros')
        ->join('autors', 'libros.id_autor', '=', 'autors.id')
      
      
        ->select('libros.id', 'libros.nombre', 'libros.year','autors.nombre as autor')
        ->where('libros.estado', true)
        ->get();


        return view ('libro.libros', compact('autores','libros'));
    }

    public function store(Request $request){

        $libros = new Libro();
        $libros->nombre = $request->nombre;
        $libros->year = $request->year;
        $libros->id_autor = $request->autor;
        $libros->save();
        return back();


      /*  Libro::create([
            'name' => $request->nombre,
             'year' => $request->year,
            'id_autor' => $request->id_autor,  
        ]);*/

    }
}
