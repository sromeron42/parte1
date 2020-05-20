

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Pelicula</title>
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
    <form class = "form-group" action="/agregarPelicula" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label for="title">Titulo:</label><br>
         <input type="text" name="title" value="{{old("title")}}">  <!--old mantiene valores anteriores-->
      </div>
      <div class="form-group">
        <label for="rating">Rating:</label><br>
        <input type="text" name="rating" value="">
      </div>
      <div class="form-group">
        <label for="awards">Premios:</label><br>
        <input type="text" name="awards" value="">
      </div>
      <div class="form-group">
        <label for="release_date">Fecha_estreno:</label><br>
        <input type="date" name="release_date" value="">
      </div>
      <div class="form-group">
        <input type="submit" name="" value="Agregar Pelicula">
      </div>
    </form>

    <ul style="color:red" class="errors">
    @foreach ($errors->all() as $error)
      <li>
         {{$error}} <!--muestra los errores -->
      </li>
    @endforeach
    </ul>
  </body>

<footer>
  <p>©DIGITAL HOUSE 2020</p>
</footer>
</html>
