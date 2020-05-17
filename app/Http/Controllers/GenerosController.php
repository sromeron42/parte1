<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genero;

class GenerosController extends Controller
{
  public function listado(){
    $generos = Genero::all(); //mostrar todas las peliculas

    $vac = compact("generos");
    return view ("listadogeneros", $vac);
  }
}
