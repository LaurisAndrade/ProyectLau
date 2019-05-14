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
                    <li> <a href="<?php echo base_url(); ?>index.php/welcome/inicio" data-ajax="false">INICIO</a></li>
                    <li> <a href="#" data-ajax="false">USUARIOS</a></li>
                    <li> <a href="<?= base_url(); ?>index.php/admin/recomendaciones" data-ajax="false">RECOMENDACIONES</a></li>
                    <li> <a href="#" data-ajax="false">TIPS</a></li>
                </ul>
            </nav>
        </div>
        <div data-role="main">
            <div style="margin-left:240px">
                <img src="<?php echo base_url(); ?>images/bienvenido.gif" alt="">
            </div>
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