<html lang="en" dir="ltr">
  <body>


    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="index.php"  data-icon="home">Inicio</a>
        <img src="<?=  base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
        <a href="<?= base_url(); ?>index.php/Tips/tips_ejercicios"  data-icon="grid">Login</a>
      </div>
      <br>
      <br>
      <div data-role="main">
      <a href="<?=  base_url(); ?>index.php/Tips_ejercicio/index/" data-ajax="false" style="background-color:#67EC69;"></a>
      <?php
        //$chats->result();

        foreach ($tips->result() as $row){

        ?>
        <div class="ui-grid-a">
          <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:300px; width:600px;"><?= nl2br($row->nombre); ?></div></div>
          <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:300px; width:500px;"><center><img src="<?php echo base_url(); ?><?= $row->foto;?>" style="height:210px; width:300px; background-color:#67EC69;" alt=""></center></div></div>
        </div>
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
