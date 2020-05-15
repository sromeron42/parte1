<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class ActoresController extends Controller
{
  public function listado(){
    $actores = Actor::paginate(5); //muestra cierta cantidad de actores

$vac = compact("actores");
return view("listadoactores", $vac);
  }
}
