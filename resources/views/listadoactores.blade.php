<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de Actores</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Mis Actores</h1>
    <ul>
      @forelse ($actores as $actor)
      <li>
        {{$actor->getNombreCompleto()}}
      </li>
        @empty
          <p>
            No hay actores
          </p>
      @endforelse
    </ul>
     {{$actores->links()}} <!-- genera hipervinculos barra de navegacion -->

  </body>
</html>
