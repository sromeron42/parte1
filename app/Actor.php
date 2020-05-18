<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  //public $table = "actors"; //indico el nombre de la tabla
  //public $primaryKey = "id"; //indica la clave principal
  //public $timestamps = false; //indica fecha de creacion
  public $guarded = []; //indica que todas las columnas de la bd se pueden escribir

  public function getNombreCompleto(){
    return $this->first_name . "" . $this->last_name;
  }

  public function peliculas(){
    return $this->belongsToMany("App\Pelicula", "actor_movie", "actor_id" , "movie_id");
  }
}
