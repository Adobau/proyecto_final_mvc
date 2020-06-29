<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Proyecto PHP-MVC-MYSQL</title>

  <!-- CSS  -->
  <link href="view/img/favicon.png" type="image/png" rel="icon"/>
  <link href="view/css/icon.css" rel="stylesheet">
  <link href="view/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="view/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="view/css/jquery.dataTables.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="azul-ast" role="navigation" id="nav">

    <div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>" class="brand-logo"><img src="view/img/logo.png" class="responsive-img" ></a>
      <!-- menú dispositivos grandes -->
      <ul class="right hide-on-med-and-down">
        <li><a href="?c=<?php echo base64_encode('Talla'); ?>">Talla</a></li>
        <li><a href="?c=<?php echo base64_encode('Color'); ?>">Color</a></li>
        <li><a href="?c=<?php echo base64_encode('Cliente'); ?>">Cliente</a></li>
        <li><a href="?c=<?php echo base64_encode('Usuario'); ?>">Usuario</a></li>

        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger btn naranja-ast tooltipped" data-position="bottom" data-tooltip="Usuario activo" href='#' data-target='dropdown1'><i class="material-icons">person_pin</i></a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>&nbsp;</a></li>
          <li><a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Salir'); ?>" class="naranja-ast-text"><i class="material-icons">exit_to_app</i>Salir</li></a>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons">vpn_key</i>Nueva clave</a></li>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaPregunta'); ?>" class="naranja-ast-text"><i class="material-icons">live_help</i>Nueva pregunta</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarDatos'); ?>" class="naranja-ast-text"><i class="material-icons">assignment</i>Mis datos</a></li>
        </ul>
      </ul>

      <!-- menú dispositivos móbiles -->
      <ul id="nav-mobile" class="sidenav azul-ast">
        <li><a class="white-text" href="?c=<?php echo base64_encode('Home'); ?>"><i class="material-icons white-text">home</i>inicio</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Talla'); ?>"><i class="material-icons white-text">style</i>Talla</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Color'); ?>"><i class="material-icons white-text">color_lens</i>Color</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Cliente'); ?>"><i class="material-icons white-text">supervisor_account</i>Cliente</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Usuario'); ?>"><i class="material-icons white-text">account_circle</i>Usuario</a></li>

        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger btn naranja-ast" href='#' data-target='dropdown2'><i class="material-icons white-text">person_pin</i> Usuario activo</a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown2' class='dropdown-content'>
          <li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>MENÚ</a></li>

          <li><a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Salir'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">exit_to_app</i>Salir</a></li>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">vpn_key</i>Nueva clave</a></li>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaPregunta'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">live_help</i>Nueva pregunta</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarDatos'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">assignment</i>Mis datos</a></li>
        </ul>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
<!-- fin de la cabecera -->