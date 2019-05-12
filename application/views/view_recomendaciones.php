<html lang="en" dir="ltr">
  <body>
    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="<?php echo base_url(); ?>index.php/welcome/index"  data-icon="home" data-ajax="false">Inicio</a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?php echo base_url(); ?>index.php/login/see_login"  data-icon="grid"data-ajax="false">Login</a>
      </div>
      <nav data-role="navbar">
        <ul>
          <li> <a href="<?php echo base_url(); ?>index.php/tips_ejercicios/tips" data-ajax="false">TIPS</a></li>
          <li> <a href="<?php echo base_url(); ?>index.php/Recomendaciones/index" data-ajax="false">RECOMENDACIONES</a></li>

        </ul>
      </nav>
      <h1><center>Recomendaciones</center></h1>
      <br>
      <br>
      <div data-role="main">
      <a href="<?=  base_url(); ?>index.php/Recomendaciones/index/" data-ajax="false" style="background-color:#67EC69;"></a>
      <?php
        //$chats->result();

        foreach ($recomendacion->result() as $row){

        ?>
        <div class="ui-grid-a">
          <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:300px; width:600px; background:white;"><?= nl2br($row->rec_descripcion); ?></div></div>
          <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:300px; width:500px; background:white;"><center><img src="<?php echo base_url(); ?><?= $row->rec_foto;?>" style="height:250px; width:350px; background-color:#67EC69;" alt=""></center></div></div>
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
