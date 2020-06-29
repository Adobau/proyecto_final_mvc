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
</head>
<body>
  <nav class="azul-ast" role="navigation" id="nav">

    <div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>" class="brand-logo"><img src="view/img/logo.png" class="responsive-img" ></a>

  </nav>
  
<!-- fin de la cabecera -->

<!-- cuerpo de login -->
<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s6 offset-s3">
            <h2 class="center  azul-ast-text"><i class="medium material-icons">account_circle</i> 
              Iniciar Sesión
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Entrar'); ?>" method="post" enctype="multipart/form-data">
                <div class="row">

                <div class="input-field col s12">
                <i class="material-icons prefix form-icon">mail</i>
                <input id="email" name="email" type="email" class="validate" autofocus required autocomplete="off">
                <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                <i class="material-icons prefix form-icon">vpn_key</i>
                <input id="clave" name="clave" type="password" class="validate" required>
                <label for="clave">Clave</label>
                </div>
                 
                  
                  <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn azul-ast"><i class="material-icons right">send</i>Entrar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>

  <!-- inicio del pie -->
<footer id="footer" class="page-footer naranja-ast">
    <div class="container">
      <!-- foot -->
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Proyecto final</h5>
          <p class="grey-text text-lighten-4">
            Proyecto final desarrollado en PHP, con la metodología MVC (Model - View - Controller) y MySQL como gestor de bases de datos. 
            Todas las vistas se crearon con el framework de diseño Materializecss basado en Material Design.
          </p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contactos</h5>
          <ul>
            <li><a class="white-text" href="mailto:brayannolasco011@gmail.com">Nolasco Ramírez Brayan Isaac.</a></li>
            <li><a class="white-text" href="https://www.youtube.com/channel/UCdCd9f4XTh2sle8P3oT_xYg" target="_blank">Pineda Paniagua Nahum Israel.</a></li>
            <li><a class="white-text" href="www.facebook.com/armandosanchez.trabajando" target="_blank">Ramírez Bachez Mario Alejandro.</a></li>
          </ul>
        </div>
        
        <div class="col l3 s12 center">
          <img src="view/img/logo.png" alt="Logo" class="responsive-img">
        </div>

      </div>
    </div>
    <div class="footer-copyright gris-ast">
      <div class="container">
      by <a class="white-text" target="_blank">Brayan Nolasco | Estudiante de Tec. en Ing en Sistema Informatico.</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="view/js/jquery-2.1.1.min.js"></script>
  <script src="view/js/materialize.js"></script>
  <script src="view/js/init.js"></script>

  </body>
</html>