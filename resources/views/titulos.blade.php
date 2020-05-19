<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de Generos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <br>
    <form method="get" action="/buscar">
      {{csrf_field()}}
      Pelicula que desea buscar:<input type="Text" name="nombre"/>
      <buttom value="enviar"/>
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
</html>
