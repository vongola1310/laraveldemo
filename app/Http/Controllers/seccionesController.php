<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seccion;
use Illuminate\Support\Facades\DB;

class seccionesController extends Controller
{
  
    public function store(Request $request){
        $request -> validate([
            'titulo' => 'required|min:5',
            'descripcion' =>'required|min:5',
            'date'=>'required'
        ]);
        //este if es para la imagen
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
        $secciones->date=$request-> date;
       
        $secciones->save();

        return redirect()->route('home')->with('succes','Tarea Creada correctamente');



    }

    public function index(){
        $datos = DB::table('seccions')->get(); // Reemplaza 'nombre_de_la_tabla' con el nombre de tu tabla
        $colum = Seccion::select('imagen')->get();
        $ids=Seccion::select('id')->get();
        
        return view('secciones', ['datos' => $datos]);
        
    }

    public function show(){

    $datos= DB::table('seccions')->get();
    return view('edit', ['datos' => $datos] );

    }








    public function update(Request $request, $id)
{
    if ($request->hasFile('imagen')) {
        $file=$request->file('imagen');
        $ruta = 'imgsaves/';
        $nombreimagen= time() . '-'.$file->getClientOriginalName();
        $subirimagen = $file->move($ruta, $nombreimagen);
        
       
         // Aquí puedes guardar la ruta de la imagen en tu base de datos si es necesario
     }
    // Validación y actualización de datos aquí
    $seccion = seccion::find($id);
    $seccion->titulo = $request->titulo;
    $seccion->descripcion = $request->descripcion;
    $secciones->imagen = $ruta.$nombreimagen;
   
    // Actualiza otros campos según sea necesario
    $seccion->save();

    return redirect()->route('form')->with('success', 'Sección actualizada correctamente');
}

   

  
}
