<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/saludo", function () {
  return  ('HOLA PAPAGAYO');
});

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/peliculas/top", "PeliculasController@top");

Route::get("/pelicula/{id}" , "PeliculasController@detalle");

Route::get("/actores", "ActoresController@listado");

Route::get("/agregarPelicula", function (){
  return view("agregarPelicula");
});

Route::post("/agregarPelicula", "PeliculasController@agregar");

Route::post("/borrarPelicula", "PeliculasController@borrar");

Route::get("/generos", "GenerosController@listado");
