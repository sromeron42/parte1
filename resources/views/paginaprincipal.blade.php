<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Peliculas Random</h1>
    <ul>
            @foreach ($peliculas as $pelicula)
            <li>
              {{$pelicula->title}}
            </li>
            @endforeach
    </ul>
    <h1>Últimas peliculas agregadas</h1>
    <ul>
            @foreach ($ultimas as $ultima)
            <li>
              {{$ultima->title}}
            </li>
            @endforeach
    </ul>
  </body>
</html>
