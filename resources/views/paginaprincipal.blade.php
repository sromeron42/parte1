<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina Principal</title>
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
    <h2>Peliculas Random</h2>
    <ul>
            @foreach ($peliculas as $pelicula)
            <li>
              {{$pelicula->title}}
            </li>
            @endforeach
    </ul>
    <h2>Últimas peliculas agregadas</h2>
    <ul>
            @foreach ($ultimas as $ultima)
            <li>
              {{$ultima->title}}
            </li>
            @endforeach
    </ul>
  </body>
  <footer>
    <p>©DIGITAL HOUSE 2020</p>
  </footer>
</html>
