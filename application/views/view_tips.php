<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
    <script src="<?php echo  base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>

  </head>
  <body>
    <div data-role="page" id="page1">
      <div data-role="header">
        <a href="<?php echo base_url(); ?>index.php/welcome/index"  data-icon="home" data-ajax="false">Inicio</a>
        <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
      </div>

    <div data-role="main">
      <?php
        //$chats->result();

        foreach ($descripcion->result() as $row) {

       ?>
      <div class="ui-grid-a">

        <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="width:200%;">
          <img src="<?php echo base_url(); ?><?= $row->foto;?>" style="height:60px; width:60px; " alt="">&nbsp;<a href="<?= base_url(); ?>index.php/cargar_tips/cargar_tips/<?= $row->id; ?>" data-ajax="false"><?= $row->nombre; ?></a> </div></div>
    </div>
    <?php
    }
    ?>

      </div>
      <div data-role="footer">
        <div class="footer" style="width:1400px; height:170px; background-color:black;">

            <br>
          <center><h2>Energetic Body Gym</h2>
          <p>Contáctenos: 3143219894-3132956425</p>
          <p>Email: energetic_gym@gmail.com</p></center>


        </div>
        <!--<img src="images/Rutinas/banner.png" alt="" >-->
      </div>
    </div>



  </body>
</html>
