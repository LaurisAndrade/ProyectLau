<!DOCTYPE html>
<html lang="es" dir="ltr">
  <body>
    <div data-role="page" id="pagina_uno">
      <div data-role="header">
        <a href="#"  data-icon="user"><?= $this->session->userdata('nombres_usuario'); ?>&nbsp;<?= $this->session->userdata('apellidos_usuario'); ?></a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?= base_url(); ?>index.php/admin/tips"  data-icon="arrow-l" data-ajax="false">Atras</a>
      </div>
      <div data-role="main">
        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/update_tip" method="post" data-ajax="false">
          <h3 style="text-align:center;">Formulario Modificar Recomendaciones</h3>
          <div style="width:800px; margin-left:300px;" >
            <?php
                //se traen los datos con un foreach
                foreach ($tip_editar->result() as $row){
                    $id=$row->id;
                    $nombre=$row->nombre;
                    $foto=$row->foto;
                    $estado=$row->estado;
                }
                if($estado==1){
                    $activo="selected";
                    $inactivo="";
                }
                else{
                    $activo="";
                    $inactivo="selected";
                }
            ?>

            <input type="hidden" name="ruta_imagen" value="images">
            <label for="Nombres">Descripcion</label>
            <textarea name="nombre" id="nombre" require><?= $nombre; ?></textarea>
            <input type="hidden" name="id" value="<?= $id; ?>">

            <label for="Nombres">Estado</label>

            <select name="estado" id="estado" required>
                <option value="0" <?= $inactivo; ?> >Inactivo</option>
                <option value="1" <?= $activo; ?>>Activo</option>
            </select>

            <label>imagen</label>
            <input type="file" id="foto" name="foto" required>
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
