<!DOCTYPE html>
<html lang="es" dir="ltr">
  <body>
    <div data-role="page" id="pagina_uno">
      <div data-role="header">
          <a href="#"  data-icon="user" title="Mi Perfil"><?= $this->session->userdata('nombres_usuario'); ?>&nbsp;<?= $this->session->userdata('apellidos_usuario'); ?></a>
          <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
          <a href="<?= base_url(); ?>index.php/login/logout"  data-icon="arrow-l" data-ajax="false">Salir</a>
          <nav data-role="navbar">
              <ul>
                  <li> <a href="<?= base_url(); ?>index.php/welcome/inicio" data-ajax="false">INICIO</a></li>
                  <li> <a href="#" data-ajax="false">USUARIOS</a></li>
                  <li> <a href="<?= base_url(); ?>index.php/admin/recomendaciones" data-ajax="false">RECOMENDACIONES</a></li>
                  <li> <a href="<?= base_url(); ?>index.php/admin/tips" data-ajax="false">TIPS</a></li>
                  <li> <a href="<?= base_url(); ?>index.php/ejercicios/agregar" data-ajax="false">EJERCICIOS</a></li>
              </ul>
          </nav>
        </div>
      <div data-role="main">
        <!--<div style="margin-left:240px">
          <img src="<?php echo base_url(); ?>images/bienvenido.gif" alt="">
        </div>-->
          <td><a href="<?= base_url(); ?>index.php/admin/crear_nuevo" data-icon="home" data-ajax="false">Agregar</a></td>
        <!--inicio de la tabla-->
        <table data-role="table" id="table-custom-2" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive" data-column-btn-theme="b" data-column-btn-text="Columns to display..." data-column-popup-theme="a">          <thead>
          <tr class="ui-bar-d">
            <!--<th data-priority="2">Numero</th>-->

            <th data-priority="3">Nombres</th>
            <th data-priority="1">Tipo Identificacion</th>
            <th data-priority="5">Numero Identificacion</th>
            <th data-priority="5">Estado</th>
          </tr>
          </thead>
          <tbody>
          <?php
            $numeracion=1;
            foreach ($usuario->result() as $row){
           ?>
            <tr>
              <!--<th><?= $numeracion;?></th>-->
              <td><?= $row->usu_nombres.$row->usu_apellidos;  ?></td>
              <td>
                <?php $tipoidentificacion=$row->usu_tipoidentificacion;
                  if($tipoidentificacion=='1'){
                    echo "Cédula de ciudadania";
                  }
                  else{
                    if($tipoidentificacion=='2'){
                        echo "Cédula Extrangera";
                    }else{
                      if($tipoidentificacion=='3'){
                        echo "Registro Civil";
                      }else {
                        if($tipoidentificacion=='4'){
                          echo "Tarjeta de Identidad";

                        }
                      }

                    }

                  }
                ?>
              </td>
                <td><?= $row->usu_numeroidentificacion;  ?></td>
                <td>
                  <?php $estado=$row->usu_estado;
                    if($estado=='1'){
                      echo "Activo";
                    }
                    else{
                      echo "Inactivo";
                    }
                  ?>
                </td>
              <!--<td><a href="<?= base_url(); ?>index.php/admin/editar_usuario/<?= $row->usu_codigo; ?>" data-icon="home" data-ajax="false">Editar</a></td>-->
            </tr>
          <?php
            $numeracion++;
            }
          ?>

          </tbody>
	       </table>
        <!--fin de la tabla-->
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
