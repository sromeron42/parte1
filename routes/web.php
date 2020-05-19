<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/pelicula/{id}" , "PeliculasController@detalle"); // punto 5

Route::get("/agregarPelicula", function (){ //punto 7
  return view("agregarPelicula");
})->Middleware("auth"); // punto 8

Route::post("/agregarPelicula", "PeliculasController@agregar");

Route::post("/borrarPelicula", "PeliculasController@borrar");

Route::get("/generos", "GenerosController@listado"); //punto 6

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/random', "PeliculasController@random"); // punto 4

Route::get("/buscar", "PeliculasController@buscar"); // punto 6
