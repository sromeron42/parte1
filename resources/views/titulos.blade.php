<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Titulos</title>
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
    <form method="get" action="/buscar">
      {{csrf_field()}}
      Buscar:<input type="text" name="nombre"/>
    </form>
    <br>

    <h1>Generos</h1>
    <ul>
      @foreach ($generos as $genero)
          <li>
          {{$genero->name}}
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
{{$generos->links()}} <!-- genera hipervinculos barra de navegacion -->
  </body>
  <footer>
    <p>©DIGITAL HOUSE 2020</p>
  </footer>
</html>
