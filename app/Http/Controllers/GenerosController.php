<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genero;

class GenerosController extends Controller
{
  public function listado(){
    $generos = Genero::paginate(5); //muestra cierta cantidad de actores

    $vac = compact("generos");
    return view ("titulos", $vac);
  }
}
