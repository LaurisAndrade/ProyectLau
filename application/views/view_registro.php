<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>
  </head>
  <body>
    <div data-role="page" id="pagina_uno">
      <div data-role="header">
        <a href="<?php echo base_url(); ?>index.php/login/index" data-icon="home" data-ajax='false'>Inicio</a>
        <h1><img src="images/icono.png" alt="" style="width:100px;height:50px;"></h1>
        <a href="#"  data-icon="grid">Login</a>
      </div>
      <div data-role="main">
        <div class="ui-field-contain">
          <form action="<?php echo base_url(); ?>index.php/registrarse/registro" method="post" data-ajax="false">
              <label for="Nombres">Nombres</label>
              <input type="text" name="nombres" id="nombres" value="">

              <label for="Nombres">Apellidos</label>
              <input type="text" name="apellidos" id="apellidos" value="">

              <label for="Nombres">Tipo Identificacion</label>
              <select name="tipo_identificacion" id=tipo_identificacion>
                <option value="0">Seleccione...</option>
                <option value="0">Cedula de Ciudadania</option>
                <option value="0">Cédula Extrangera</option>
                <option value="0">Registro Civil</option>
                <option value="0">Tergeta de Identidad</option>
              </select>

              <label for="Nombres">Número de Identificaci&oacute;n</label>
              <input type="text" name="numero_identificacion" id="numero_identificacion" value="">

              <label for="Nombres">Usuario</label>
              <input type="text" name="nombres" id="nombres" value="">

              <label for="Nombres">Contraseña</label>
              <input type="password" name="contra" id="contra" value="">

              <button type="submit" name="button">Guardar</button>
          </form>
        </div>
      </div>
      <div data-role="footer">

      </div>
    </div>
  </body>
</html>
<style media="screen">

</style>
