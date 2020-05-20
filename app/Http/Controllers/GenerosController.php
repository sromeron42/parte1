<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genero;

class GenerosController extends Controller
{
  public function listado(){
    $generos = Genero::paginate(6); //muestra cierta cantidad de generos

    $vac = compact("generos");
    return view ("titulos", $vac);
  }
}
