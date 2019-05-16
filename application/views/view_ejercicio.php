<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear Ejercicio</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
  </head>
  <body>
    <div data-role="page" id="pagina_uno">
      <div data-role="header">
        <a href="<?= base_url(); ?>index.php/welcome/inicio" data-ajax="false">INICIO</a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?php echo base_url(); ?>index.php/login/see_login"  data-icon="grid">Login</a>
      </div>
      <div data-role="main">
        <form action="<?php echo base_url(); ?>index.php/ejercicios/ejercicio" method="post" data-ajax="false">
          <h3 style="text-align:center;">Formulario de Crear Ejercicio</h3>
          <div style="width:800px; margin-left:300px;" >
            <?php
              /*$contra='yuliana#palacio.minu';
              $contra_encriptada=md5($contra);
              echo "Contraseña: ".$contra." <br> Contraseña Encriptada ".$contra_encriptada;*/
             ?>
            <label for="Nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="">


            <label for="Descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" value="">

            <label for="Estado">Estado</label>
            <select name="estado" id=estado>
              <option value="0">Seleccione...</option>
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
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
