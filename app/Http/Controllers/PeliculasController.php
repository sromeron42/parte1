<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula; //aclaro que objeto de la bd voy a usar

class PeliculasController extends Controller
{
    public function listado(){
      $peliculas = Pelicula::all(); //mostrar todas las peliculas

      $vac = compact("peliculas");
      return view ("listadopelicula", $vac);
    }


    public function detalle($id){

      $pelicula = Pelicula::find($id); //buscar pelicula por id

      $vac = compact ("pelicula");
      return view("detallePelicula", $vac);
    }

    public function top(){
      $peliculas = Pelicula::where("rating", ">" , 5 ) //mostrar peliculas con filtro
      ->orderBy("title")
      ->get();
      $vac = compact("peliculas");
      return view("listadopelicula", $vac);
    }

    /////////////////////////////////VALIDAR////////////////////////////////////

    public function agregar(Request $req){ //recibe info de formulario

      $reglas = [
        "title" => "string|min:3|unique:movies,title",
        "awards" => "integer|min:0",
        "release_date" => "date",
        "rating" => "numeric|min:0|max:10",
        "poster" => "file"
      ];

      $mensajes = [
        "string" => "el campo :attribute debe ser un texto", //:attribute placeholder
        "min" => "el campo :attribute tiene un minimo de :min",
        "max" => "el campo :attribute tiene un maximo de :max",
        "date" => "el campo :attribute debe ser una fecha",
        "numeric" => "EL campo :attribute debe ser un número entero",
        "unique" => "el campo :attribute se encuentra repetido"
      ];

      $this->validate($req, $reglas, $mensajes); //metodo que se usa para validar

      ///////////////////////////////INSERTAR///////////////////////////////////

      $peliculaNueva = new Pelicula(); //creacion del objeto de la nueva pelicula

      $ruta = $req->file("poster")->store("public"); //archivo que devuelve una ruta
      $nombreArchivo = basename($ruta);

      $peliculaNueva->poster = $nombreArchivo;
      $peliculaNueva->title = $req["title"]; // campos que vamos a rellenar
      $peliculaNueva->rating = $req["rating"]; // campos que vamos a rellenar
      $peliculaNueva->awards = $req["awards"]; // campos que vamos a rellenar
      $peliculaNueva->release_date = $req["release_date"]; // campos que vamos a rellenar

      $peliculaNueva->save(); //metodo que guarda en bd

      return redirect("/peliculas"); //redirecciona a /peliculas
    }

    public function borrar(Request $req){ //recibe info de formulario
      $id = $req["id"];
      $pelicula = Pelicula::find($id); //busca id
      $pelicula->delete(); //metodo para borrar bd

      return redirect("/peliculas");
    }



}
