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
