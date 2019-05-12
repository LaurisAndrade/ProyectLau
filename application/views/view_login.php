<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <div data-role="page" id="page1">
      <div data-role="header">
        <!--<a href="<?php echo base_url(); ?>index.php/welcome/index"  data-icon="home" data-ajax="false">Inicio</a>-->
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?php echo base_url(); ?>index.php/registrarse/form_registro" data-icon="gear">Registrarse</a>
      </div>

    <div data-role="main">
      <form class="" align="center" action="<?php echo base_url(); ?>index.php/login/valida_user" method="post" data-ajax="false" style="border:none;background-color: transparent;">
        <div class="login" align="center" style="width:700px;height:400px;float:center;border:none; margin-left:145px;" >

          <div data-role="fieldcontain" align="center" style="width:300px;height:200px;float:right;">
            <h1><img src="<?php echo base_url(); ?>images/ebg.png" alt="" style="width:180px;height:150px;"></h1>

              <input type="text" name="nombre_usuario"  id="nombre_usuario" value="" placeholder="Usuario" required />

              <input type="password" name="password_usuario" id="password_usuario" value="" placeholder="Contraseña" required />

              <button type="submit" name="button"  >Ingresar</button>
          </div>
        </div>

        </form>
      </div>
      <div data-role="footer">
        <div class="footer" style="width:1400px; height:170px; background-color:black;">

            <br>
          <center><h2>Energetic Body Gym</h2>
          <p>Contáctenos: 3143219894-3132956425</p>
          <p>Email: energetic_gym@gmail.com</p></center>


        </div>
        <!--<img src="images/Rutinas/banner.png" alt="" >-->
      </div>
    </div>



  </body>
</html>
