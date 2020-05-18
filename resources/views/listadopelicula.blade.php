<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de peliculas</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Mis peliculas</h1>
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
          @unless ($pelicula->rating < 8)
            <p>EXCELENTE</p>
          @endunless
        </li>
      @empty
      <p>
        no hay Peliculas
      </p>
      @endforelse
    </ul>

  </body>
</html>
