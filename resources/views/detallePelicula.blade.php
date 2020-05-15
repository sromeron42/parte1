<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de peliculas</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
     <h1>Usted eligio la pelicula {{$pelicula->title}}</h1> <!--pelicula que se trae por id -->
     <div class="">
       <img src="/storage/{{$pelicula->poster}}" alt="">
    <form class="" action="/borrarPelicula" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      <input type="submit" name="" value="Borrar pelicula">
    </form>
  </body>
</html>
