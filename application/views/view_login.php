<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="<?php base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="<?php base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <script src="<?php base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>

  </head>
  <body>
    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="<?php echo base_url(); ?>index.php/login/index" data-icon="home" data-ajax='false'>Inicio</a>
        <h1><img src="images/icono.png" alt="" style="width:100px;height:50px;"></h1>
        <a href="#"  data-icon="grid">Login</a>
        </div>

      <div data-role="main">
        <form class="" action="<?php base_url(); ?>index.php/login/valida_user" method="post" data-ajax="false">
          <div data-role="fieldcontain">
              <label for="name">Usuario</label>
              <input type="text" name="nombre_usuario"  id="nombre_usuario" value="" placeholder="Usuario" required />
      <br>
              <label for="name">contraseña</label>
              <input type="password" name="password_usuario" id="password_usuario" value="" placeholder="Contraseña" required />

          </div>

          <button type="submit" name="button" >Ingresar</button>

        </form>
      </div>
        <div data-role="main">
          <div data-role="main">
            <form class="" action="<?php echo base_url(); ?>index.php/registrarse/form_registro" method="post" data-ajax="false">

              <button type="submit" name="button" >Registrarse</button>

            </form>


        </div>
        <div data-role="footer">



        </div>
      </div>


      <div data-role="footer">

      </div>
    </div>


  </body>
</html>
