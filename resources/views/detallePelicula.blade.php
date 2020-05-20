<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalle Pelicula</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  <header>
<ul>
      <li>
      <a href="/random">Pagina Principal</a>
      </li>
      <li>
      <a href="/generos">Titulos</a>
      </li>
      <li>
      <a href="/agregarPelicula">Agregar Pelicula</a>
      </li>
</ul>
  </header>

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

    <form class="" action="/borrarPelicula" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$pelicula->id}}">
      <input type="submit" name="" value="Borrar pelicula">
    </form>
  </body>
  <footer>
    <p>©DIGITAL HOUSE 2020</p>
  </footer>
</html>
