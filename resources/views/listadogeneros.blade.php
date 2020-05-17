<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de Generos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Generos</h1>
    <ul>
      @foreach ($generos as $genero)
          <li>
          {{$genero->name}}
          Peliculas:
          <ul>
            @foreach ($genero->peliculas as $pelicula)
              <li>
                {{$pelicula->title}}
              </li>
            @endforeach
            </ul>
          </li>
      @endforeach
    </ul>
  </body>
</html>
