<html lang="en" dir="ltr">
  <body>
    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="#"  data-icon="user"><?= $this->session->userdata('nombres_usuario'); ?>&nbsp;<?= $this->session->userdata('apellidos_usuario'); ?></a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?= base_url(); ?>index.php/login/logout"  data-icon="arrow-l" data-ajax="false">Salir</a>
        <nav data-role="navbar">
          <ul>
            <li> <a href="<?php echo base_url(); ?>index.php/welcome/inicio" data-ajax="false">INICIO</a></li>
            <li> <a href="#" data-ajax="false">TIPS</a></li>
            <li> <a href="<?php echo base_url(); ?>index.php/Recomendaciones/index" data-ajax="false">RECOMENDACIONES</a></li>
          </ul>
        </nav>
      </div>
      
     
      <h1><center>Tips Ejercicios</center></h1>
      <br>
      <div data-role="main">
      <?php
        //$chats->result();

        foreach ($tips->result() as $row){

        ?>
        <div class="ui-grid-a">
          <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:300px; width:600px; background:white;"><center><img src="<?php echo base_url(); ?><?= $row->foto;?>" style="height:300px; width:500px; background-color:#67EC69;" alt=""></center></div></div>
          <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:300px; width:500px; background:white;"><?= nl2br($row->nombre); ?></div></div>
        </div>
        <br>
        <?php
        }
      ?>
    </div>

    </div>

    <div data-role="footer">

      <!--<img src="images/Rutinas/banner.png" alt="" >-->
    </div>
  </body>
</html>
