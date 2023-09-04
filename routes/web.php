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

Route::get('/agregar', function (){
    return view('agregarsec');
});

Route::get('/admin',function(){
      return view('auth/login');
});

Route::post('/agregar',[seccionesController::class,'store'])->name('agregar');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>