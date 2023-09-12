<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\seccionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function (){
return view('index');
    });
    
  

Route::get('/admin',function(){
      return view('auth/login');
});

Route::post('/home',[seccionesController::class,'store'])->name('home');


Route::get('/secciones',function(){
    return view('secciones');
});



Route::get('/secciones',[seccionesController::class,'index'])->name('secciones');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/edit', [seccionesController::class,'show'])->name('edit.show');
Route::get('/form/{id}/', [seccionesController::class,'ver'])->name('form.edit');
Route::put('/update/{id}', [seccionesController::class, 'update'])->name('form.update');










?>