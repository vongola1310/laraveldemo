<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seccion;

class seccionesController extends Controller
{
  
    public function store(Request $request){
        $request -> validate([
            'titulo' => 'required|min:5',
            'descripcion' =>'required|min:5'
        ]);
        if ($request->hasFile('imagen')) {
           $file=$request->file('imagen');
           $ruta = 'imgsaves/';
           $nombreimagen= time() . '-'.$file->getClientOriginalName();
           $subirimagen = $file->move($ruta, $nombreimagen);
           
          
            // Aquí puedes guardar la ruta de la imagen en tu base de datos si es necesario
        }

        $secciones = new seccion;
        $secciones -> titulo = $request-> titulo;
        $secciones -> descripcion = $request-> descripcion;
        $secciones->imagen = $ruta.$nombreimagen;
       
        $secciones->save();

        return redirect()->route('home')->with('succes','Tarea Creada correctamente');



    }

    public function index(Request $request){

    }
}
