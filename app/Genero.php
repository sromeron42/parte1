<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
  public $table = "genres"; //indico el nombre de la tabla
  //public $primaryKey = "id"; //indica la clave principal
  //public $timestamps = false; //indica fecha de creacion
  public $guarded = []; //indica que todas las columnas de la bd se pueden escribir

  public function peliculas(){
    return $this->hasMany("App\Pelicula", "genre_id"); //relacion muchos a uno,  devuelve un objeto pelicula.
  }
}
