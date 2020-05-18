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
            @foreach ($peliculas as $pelicula)
            <li>
              {{$pelicula->title}}
            </li>
            @endforeach
    </ul>
    <ul>
            @foreach ($ultimas as $ultima)
            <li>
              {{$ultima->title}}
            </li>
            @endforeach
    </ul>

    <form method="get" action="/buscar">
      {{csrf_field()}}
      <input type="Text" name="nombre"/>
      <buttom value="enviar"/>
    </form>
  </body>
</html>
