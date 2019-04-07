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
        <a href="#" data-icon="home" data-ajax='false'>Inicio</a>
        <a href="<?php echo base_url(); ?>index.php/login/see_login"  data-icon="grid" data-ajax='false'>Login</a>
        </div>

      <div data-role="main">
        <form class="" align="center" action="<?php base_url(); ?>index.php/login/valida_user" method="post" data-ajax="false" style="border:none;background-color: transparent;">
          <div class="login" align="center" style="width:700px;height:300px;float:center;border:none;" >


          <div data-role="fieldcontain" align="center" style="width:300px;height:200px;float:right;">
            <h1><img src="images/ebg.png" alt="" style="width:100px;height:100px;"></h1>

              <input type="text" name="nombre_usuario"  id="nombre_usuario" value="" placeholder="Usuario" required />

              <input type="password" name="password_usuario" id="password_usuario" value="" placeholder="Contraseña" required />

              <button type="submit" name="button"  >Ingresar</button>

              <div data-role="main">
                <form class="" action="<?php echo base_url(); ?>index.php/registrarse/form_registro" method="post" data-ajax="false" style="border:none;background-color: transparent;">
                  <div data-role="fieldcontain" align="center" style="width:300px;height:200px;float:right;border:none;">
                  <button type="submit" name="button" >Registrarse</button>
                </div>
                </form>
            </div>
          </div>


            </div>
        </form>
      </div>

      <div data-role="footer">

      </div>



  </body>
</html>
