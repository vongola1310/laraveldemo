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

    public function update(Request $request, $id){
    
    // Validación y actualización de datos aquí
    $request->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'date'=>'required'
        // Agrega aquí las reglas de validación para otros campos si es necesario
    ]);
    // Obtén la entrada existente que deseas actualizar
    $seccion = Seccion::find($id);
    // Actualiza los campos con los nuevos valores
    $seccion->titulo = $request->input('titulo');
    $seccion->descripcion = $request->input('descripcion');
    $seccion->date=$request->input('date');
    // Actualiza otros campos según sea necesario
    if ($request->hasFile('imagen')) {
        $file=$request->file('imagen');
        $ruta = 'imgsaves/';
        $nombreimagen= time() . '-'.$file->getClientOriginalName();
        $subirimagen = $file->move($ruta, $nombreimagen);

        $seccion->imagen = $ruta . $nombreimagen;
          // Aquí puedes guardar la ruta de la imagen en tu base de datos si es necesario
     }

    // Guarda los cambios en la base de datos
    $seccion->save();

    return redirect()->route('secciones')->with('success', 'Sección actualizada correctamente');
}

public function ver($id)
{
    // Obtén la sección correspondiente según el ID
    $datos = Seccion::find($id);
    
    // Retornar la vista del formulario de edición con la sección
    return view('form', ['datos' => $datos]);
}


public function destroy($id){
    $seccion = seccion::find($id);
    $seccion->delete();

    return redirect()->route('secciones')->with('success', 'Sección eliminada correctamente');

}
   

  
}
