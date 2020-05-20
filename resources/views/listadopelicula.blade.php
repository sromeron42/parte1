<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de peliculas</title>
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
    <h1>Pelicula</h1>
    <ul>
      @forelse ($peliculas as $pelicula)
        <li>
          <p>{{$pelicula->title}}</p>
          @if ($pelicula->genero)
          <p>Genero: {{$pelicula->genero->name}} </p>
          @endif

          <p>Actores:</p>
          <ul>
            @foreach ($pelicula->actores as $actor)
            <li>
              {{$actor->getNombreCompleto()}}
            </li>
            @endforeach
          </ul>
        </li>
      @empty
      <p>
        no hay Peliculas
      </p>
      @endforelse
    </ul>
  </body>
  <footer>
    <p>©DIGITAL HOUSE 2020</p>
  </footer>
</html>
