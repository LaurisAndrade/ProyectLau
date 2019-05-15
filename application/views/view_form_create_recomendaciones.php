<!DOCTYPE html>
<html lang="es" dir="ltr">
  <body>
    <div data-role="page" id="pagina_uno">
      <div data-role="header">
        <a href="#"  data-icon="user"><?= $this->session->userdata('nombres_usuario'); ?>&nbsp;<?= $this->session->userdata('apellidos_usuario'); ?></a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?= base_url(); ?>index.php/admin/recomendaciones"  data-icon="arrow-l" data-ajax="false">Atras</a>
      </div>
      <div data-role="main">
        <!--<div style="margin-left:240px">
          <img src="<?php echo base_url(); ?>images/bienvenido.gif" alt="">
        </div>-->
        <!--inicio formulario-->
        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/edit_rec" method="post" data-ajax="false">
          <h3 style="text-align:center;">Formulario de Registro</h3>
          <div style="width:800px; margin-left:300px;" >
            <label for="Nombres">Descripcion</label>
            <textarea name="rec_descripcion" id="rec_descripcion" require></textarea>
            <input type="hidden" name="rec_codigo" id="rec_codigo" value="">

            <label for="Nombres">Estado</label>
            <select name="tipo_identificacion" id=tipo_identificacion>
              <option value="0" <?= $inactivo; ?>>Inactivo</option>
              <option value="1" <?= $activo; ?>>Activo</option>
            </select>

            <label>imagen</label>
            <input type="file" id="ruta_imagen" name="ruta_imagen">
            <label>&nbsp;</label>
            
            <button type="submit" name="button">Guardar</button>
          </diV>
        </form>

        <!--Fin formulario-->

      </div>
      <br><br><br><br><br><br><br><br><br>
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
