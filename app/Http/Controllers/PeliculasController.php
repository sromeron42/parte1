<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula; //aclaro que objeto de la bd voy a usar

use DB;

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

    /////////////////////////////////VALIDAR////////////////////////////////////

    public function agregar(Request $req){ //recibe info de formulario

      $reglas = [
        "title" => "string|min:3|unique:movies,title",
        "rating" => "numeric|min:0|max:10",
        "awards" => "integer|min:0",
        "release_date" => "date"
      ];

      $mensajes = [

        "string" => "El campo titulo debe ser un texto", //:attribute placeholder
        "min" => "El campo titulo tiene un mínimo de :min caracteres",
        "max" => "El campo titulo tiene un míximo de :max caracteres",
        "date" => "El campo fecha_estreno debe ser una fecha",
        "numeric" => "El campo :attribute debe ser un número",
        "unique" => "El campo :attribute se encuentra repetido",
        "integer" => "El campo premio debe ser un número"
      ];

      $this->validate($req, $reglas, $mensajes); //metodo que se usa para validar

      ///////////////////////////////INSERTAR///////////////////////////////////

      $peliculaNueva = new Pelicula(); //creacion del objeto de la nueva pelicula

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

    public function random(){
      $peliculas = Pelicula::all()->random(5);
      $ultimas = DB::table("movies")->orderBy("created_at" , "desc")->limit(5)->get();
      $ultpelis = compact("ultimas");
      $randoms = compact("peliculas");
      //dd($randoms);
      return view("paginaprincipal", $randoms , $ultpelis);
    }

    public function buscar(Request $req){
      $nombre = $req["nombre"];
      $peliculas = Pelicula::where("title", "LIKE", "%" . $nombre . "%")->get();
      $bus = compact ("peliculas");
      //dd($peliculas);
      return view("listadopelicula", $bus);
    }

    public function listadoAPI(){
      $peliculas = Pelicula::all();
      return json_encode($peliculas);
    }
}
