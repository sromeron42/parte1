<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalle Pelicula</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
     <h1>Eligio la pelicula {{$pelicula->title}}</h1> <!--pelicula que se trae por id -->
     <ul>
       @if ($pelicula->genero)
       <p>Genero: {{$pelicula->genero->name}} </p>
       @endif
       <p>Actores:</p>
       @foreach ($pelicula->actores as $actor)
       <li>
         {{$actor->getNombreCompleto()}}
       </li>
       @endforeach
       <br>
       <p>Rating: {{$pelicula->rating}} </p>
       <p>Fecha de lanzamiento: {{$pelicula->release_date}} </p>
     <div class="">
       <img src="/storage/{{$pelicula->poster}}" alt="">
    <form class="" action="/borrarPelicula" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      <input type="submit" name="" value="Borrar pelicula">
    </form>
  </body>
</html>
