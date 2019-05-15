<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="#"  data-icon="user" title="Mi Perfil"><?= $this->session->userdata('nombres_usuario'); ?>&nbsp;<?= $this->session->userdata('apellidos_usuario'); ?></a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?= base_url(); ?>index.php/login/logout"  data-icon="arrow-l" data-ajax="false">Salir</a>
        <?php
          $rol=$this->session->userdata('rol_usuario');
          //echo "----> Rol ".$rol;
          if($rol==1){
            ?>
            <nav data-role="navbar">
              <ul>
                <li> <a href="#">INICIO</a></li>
                <li> <a href="#" data-ajax="false">USUARIOS</a></li>
                <li> <a href="<?= base_url(); ?>index.php/admin/recomendaciones" data-ajax="false">RECOMENDACIONES</a></li>
                <li> <a href="<?= base_url(); ?>index.php/admin/tips" data-ajax="false">TIPS</a></li>
                  <li> <a href="<?= base_url(); ?>index.php/ejercicios/agregar" data-ajax="false">CREAR EJERCICIOS</a></li>
              </ul>
            </nav>

            <?php
            //echo "Hola Administrador";
          }
          elseif($rol==2){
          ?>
          <nav data-role="navbar">
            <ul>
              <li> <a href="#">INICIO</a></li>
              <li> <a href="<?php echo base_url(); ?>index.php/tips_ejercicios/tips" data-ajax="false">TIPS</a></li>
              <li> <a href="<?php echo base_url(); ?>index.php/Recomendaciones/index" data-ajax="false">RECOMENDACIONES</a></li>
            </ul>
          </nav>
          <?php
          }
        ?>

      </div>
      <div data-role="main">
        <div class="head">
          <center><h1>¿Que es Energetic Body Gym?</h1>
          <h3><p>Nuestro aplicativo permite agilizar,validar, controlar y realizar seguimientos a las actividades</p>
              <p>relacionadas con el gimnasio y las actividades deportivas organizadas por el area de</p>
              <p> bienestar, motivate a participar de ellos, el esfuerzo de hoy es el exito mañana,</p>
              <p>participa de nuestras actividades deportivas...no olvides escribirte a ellas.</p></h3></center>
        </div>

        <?php
          //$chats->result();

          foreach ($images->result() as $row){

          ?>
          <div class="ui-grid-a">
            <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:300px; width:500px; background:white; margin-left:110px;" ><center><img src="<?php echo base_url(); ?><?= $row->foto;?>" style="height:300px; width:500px; background-color:#67EC69;" alt=""></center></div></div>
            <div class="ui-block-b"><div class="ui-bar ui-bar-b" style="height:300px; width:500px; background:white"><center><img src="<?php echo base_url(); ?><?= $row->foto;?>" style="height:300px; width:500px; background-color:#67EC69;" alt=""></center></div></div>
          </div>

          <?php
          }
        ?>

      </div>
      <br>
      <br>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!--<div class="ui-content">
    <div class="ui-grid-a">
        <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:300px; width:400px;"><img src="<?php echo base_url(); ?>images/ejercicio3.jpg" alt="" style="width:400px; height:300px;"></div></div>
        <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:300px; width:400px;"><img src="<?php echo base_url(); ?>images/ejercicio2.jpg" alt="" style="width:400px; height:300px;"></div></div>


    </div> /grid-a -->


  </div>
    <br>
    <br>
    <br>
    <div data-role="main">
      <div class="head">
        <center><h1>¿Porque debes entrar a nuestro Gimnasio?</h1>
        <h3><p>Energetic Body Gym cuenta con un equipo de profesionales en el área deportiva, el cual</p>
            <p>es una gran ventaja ya que cada persona que entre a ser parte de nuestro gimnasio se</p>
            <p>evaluara su condición física para luego si asignar su adecuada rutina e instructor.</p>
            <p>Que esperas para inscribirte...</p></h3></center>
      </div>


    </div>

    <br>
    <br>
    <br>

    <div data-role="footer">
      <div class="footer" style="width:1400px; height:170px; background-color:black;">

          <br>
        <center><h2>Energetic Body Gym</h2>
        <p>Contáctenos: 3143219894-3132956425</p>
        <p>Email: energetic_gym@gmail.com</p></center>


      </div>
      <!--<img src="images/Rutinas/banner.png" alt="" >-->
    </div>
  </body>
</html>
