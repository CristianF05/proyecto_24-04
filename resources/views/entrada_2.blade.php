<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Página de Música</title>

  <!-- Agregar Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Estilos personalizados -->

  <style>

    body {

      background-color: #f8f9fa; /* Color de fondo */

      color: #343a40; /* Color del texto */

    }

    .jumbotron {

      background-image: url('https://source.unsplash.com/1600x900/?music'); /* Imagen de fondo */

      background-size: cover;

      color: #ffffff; /* Color del texto */

    }

    .card {

      background-color: #ffffff; /* Color de fondo de las tarjetas */

      border: none; /* Sin borde */

    }

    .card-title {

      color: #343a40; /* Color del título de la tarjeta */

    }

    .card-text {

      color: #6c757d; /* Color del texto de la tarjeta */

    }

    .btn-primary {

      background-color: #007bff; /* Color de fondo del botón */

      border-color: #007bff; /* Color del borde del botón */

    }

    .btn-primary:hover {

      background-color: #0056b3; /* Cambio de color al pasar el ratón sobre el botón */

      border-color: #0056b3; /* Cambio de color del borde al pasar el ratón sobre el botón */

    }

  </style>

</head>

<body>

<h1>ruta 2</h1>
    <a href="http://localhost/cristian/public/">Principal</a>

  <div class="jumbotron text-center">

    <h1 class="display-4">¡Bienvenido a tu Página de Música Favorita!</h1>

    <p class="lead">Descubre las últimas canciones, álbumes y artistas que te encantarán.</p>

    <hr class="my-4">

    <p>Explora nuestra colección y disfruta de la mejor música.</p>

    <a class="btn btn-primary btn-lg" href="#" role="button">Explorar</a>

  </div>



  <div class="container">

    <div class="row">

      <div class="col-md-4">

        <div class="card mb-4">

          <img src="https://source.unsplash.com/400x300/?music,concert" class="card-img-top" alt="Concierto de Música">

          <div class="card-body">

            <h5 class="card-title">Conciertos en Vivo</h5>

            <p class="card-text">Descubre los próximos conciertos y festivales musicales en tu área.</p>

            <a href="#" class="btn btn-primary">Ver Más</a>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card mb-4">

          <img src="https://source.unsplash.com/400x300/?music,album" class="card-img-top" alt="Álbum de Música">

          <div class="card-body">

            <h5 class="card-title">Nuevos Álbumes</h5>

            <p class="card-text">Explora los últimos lanzamientos de álbumes de tus artistas favoritos.</p>

            <a href="#" class="btn btn-primary">Ver Más</a>

          </div>

        </div>

      </div>

      <div class="col-md-4">

        <div class="card mb-4">

          <img src="https://source.unsplash.com/400x300/?music,artist" class="card-img-top" alt="Artista de Música">

          <div class="card-body">

            <h5 class="card-title">Destacados Artistas</h5>

            <p class="card-text">Descubre más sobre tus artistas favoritos y su música.</p>

            <a href="#" class="btn btn-primary">Ver Más</a>

          </div>

        </div>

      </div>

    </div>

  </div>



  <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

