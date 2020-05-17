<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies"; //indico el nombre de la tabla
    //public $primaryKey = "id"; //indica la clave principal
    //public $timestamps = false; //indica fecha de creacion
    public $guarded = []; //indica que todas las columnas de la bd se pueden escribir

    public function genero(){
      return $this -> belongsTo("App\Genero", "genre_id" ); //una pelicula pertenece a un genero, devuelve objeto de tipo genero
    }

}
