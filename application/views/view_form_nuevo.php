<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>

  </head>
  <body>
    <div data-role="page" id="pagina_uno">
      <div data-role="header">
        <a href="<?php echo base_url(); ?>index.php/welcome/index"  data-icon="home">Inicio</a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?php echo base_url(); ?>index.php/login/see_login"  data-icon="grid">Login</a>
      </div>
      <div data-role="main">
        <form action="<?php echo base_url(); ?>index.php/registrarse/nuevoregistro" method="post" data-ajax="false">
          <h3 style="text-align:center;">Formulario de Registro</h3>
          <div style="width:800px; margin-left:300px;" >
            <?php
              /*$contra='yuliana#palacio.minu';
              $contra_encriptada=md5($contra);
              echo "Contraseña: ".$contra." <br> Contraseña Encriptada ".$contra_encriptada;*/
             ?>
            <label for="Nombres">Nombres</label>
            <input type="text" name="nombres" id="nombres" value="">

            <label for="Nombres">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" value="">

            <label for="Nombres">Tipo Identificacion</label>
            <select name="tipo_identificacion" id=tipo_identificacion>
              <option value="0">Seleccione...</option>
              <option value="1">Cedula de Ciudadania</option>
              <option value="2">Cédula Extrangera</option>
              <option value="3">Registro Civil</option>
              <option value="4">Tarjeta de Identidad</option>
            </select>

            <label for="Nombres">Número de Identificaci&oacute;n</label>
            <input type="text" name="numero_identificacion" id="numero_identificacion" value="">

            <label for="Nombres">Usuario</label>
            <input type="text" name="usuario" id="usuario" value="">

            <label for="Nombres">Contraseña</label>
            <input type="password" name="contra" id="contra" value="">

            <label for="Nombres">Rol</label>
            <select name="rol" id="rol">
              <option value="0">Seleccione...</option>
              <option value="1">Administrador</option>
              <option value="2">Cliente</option>

            </select>
            <label for="Nombres">Estado</label>
            <select name="estado" id="estado">
              <option value="0">Seleccione...</option>
              <option value="1">Activo</option>
              <option value="2">Inactivo</option>

            </select>


            <label>&nbsp;</label>
            <button type="submit" name="button">Guardar</button>
          </diV>
        </form>

      </div>
      <div data-role="footer">
        <div class="footer" style="width:1400px; height:170px; background-color:black;">

            <br>
          <center><h2>Energetic Body Gym</h2>
          <p>Contáctenos: 3143219894-3132956425</p>
          <p>Email: energetic_gym@gmail.com</p></center>


        </div>
      </div>
    </div>
  </body>
</html>
<style media="screen">

</style>
