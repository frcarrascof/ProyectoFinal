<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title><?php bloginfo();?></title>
    <?php wp_head(); ?>
  </head>
  <body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top py-3">
      <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/actitudIlimitada.png" height="20" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="reclutamiento.html">Reclutamiento y selección</a>
              <a class="dropdown-item" href="talleres.html">Talleres, cursos y relatorías</a>
              <a class="dropdown-item" href="asesorias.html">Asesorías</a>
              <a class="dropdown-item" href="eventos.html">Eventos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="equipo.html">Quiénes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticias.html">Noticias</a>
          </li>
        </ul>
      </div>
    </nav>
