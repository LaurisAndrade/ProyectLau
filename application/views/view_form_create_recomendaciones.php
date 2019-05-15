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
        
      <form enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/crear_recomendaciones" method="post" data-ajax="false">
        
        <input type="hidden" name="ruta_imagen" value="images">

        <h3 style="text-align:center;">Formulario de Registro</h3>
        <div>
         
          <label for="Nombres">Descripcion</label>
          <textarea name="rec_descripcion" id="rec_descripcion" require>
          </textarea>

          <label for="Nombres">Estado</label>

          <select name="rec_estado" id="rec_estado" required="">
            <option value="0">Inactivo</option>
            <option value="1">Activo</option>
          </select>

          <label>imagen</label>
          <input type="file" id="rec_foto" name="rec_foto" required="">
          <label>&nbsp;</label>
          
          <button type="submit" name="button">Guardar</button>
        </div>
      </form>

        <!--Fin formulario-->
        <!--<div style="margin-left:240px">
            <img src="<?php echo base_url(); ?>images/bienvenido.gif" alt="">
            </div>-->
        <!--inicio formulario-->

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
