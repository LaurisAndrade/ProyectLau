<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>JPesito</title>
    <link rel="stylesheet" href="<?php base_url(); ?> jquerymobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="<?php base_url(); ?> jquerymobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="<?php base_url(); ?> jquerymobile/jquery.mobile.structure-1.4.5.min.css">

    <script type="text/javascript " src="<?php base_url(); ?> jquerymobile/jquery.js"></script>
    <script type="text/javascript " src="<?php base_url(); ?> jquerymobile/jquery.mobile-1.4.5.js"></script>

  </head>

  <body>

    <div data_role="page" id="login">
      <div data-role="header">
        <a href="index.php"  data-icon="home">Inicio</a>
        <img src="images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="#login"  data-icon="grid">Login</a>
        <div data-role="navbar">
          <ul>
            <li><a href="#page2">Acerca</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Sucursales</a></li>
            <li><a href="#">Contactos</a></li>
          </ul>
        </div>
      </div>
      <div data-role="main">
        <form class="" action="<?php base_url(); ?>index.php/login/valid_user" method="post" data-ajax="false">
          <input type="email" name="email" value="" placeholder="e-mail" required>
          <input type="password" name="pass" value="" placeholder="contraseña" required>
          <button type="submit" name="button">Entrar</button>
        </form>
      </div>
      <div data-role="footer">
      </div>
    </div>

    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="index.php"  data-icon="home">Inicio</a>
        <img src="images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="#login"  data-icon="grid">Login</a>
        <div data-role="navbar">
        </div>
      </div>

      <br>
      <br>


      <div data-role="main">
        <div class="head">
          <center><h1>¿Que es Energetic Body Gym?</h1>
          <h2><p>Nuestro aplicativo permite agilizar,validar, controlar y realizar seguimientos a las actividades</p>
              <p>relacionadas con el gimnasio y las actividades deportivas organizadas por el area de bienestar,</p>
              <p>motivate a participar de ellos, el esfuerzo de hoy es el exito mañana,participa de nuestras actividades</p>
              <p>deportivas...no olvides escribirte a ellas.</p></h2></center>
        </div>

      </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <div class="ui-content">
    <div class="ui-grid-a">
        <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:400px"><img src="images/bienvenido.jpg" alt="" style="width:720px; height:400px;"></div></div>
        <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:400px"><img src="images/ejerci.jpg" alt="" style="width:720px; height:400px;"></div></div>


    </div><!-- /grid-a -->


    </div>

  </body>
</html>
