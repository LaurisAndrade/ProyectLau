
    <html lang="en" dir="ltr">
      <head>

        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo  base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
        <script src="<?php echo base_url(); ?>jquery.mobile/jquery.js"></script>
        <script src="<?php echo base_url(); ?>jquery.mobile/jquery.mobile-1.4.5.js"></script>

      </head>

      <body>


        <div data-role="page" id="page1">
          <div data-role="header">
            <a href="index.php"  data-icon="home">Inicio</a>
            <img src="<?php echo base_url(); ?>images/nombre.jpg" alt="" style="width:1525px; height:200px;">
            <a href="<?php echo base_url(); ?>index.php/login/see_login"  data-icon="grid">Login</a>
          </div>

          <br>
          <br>

          <div data-role="main">
          <a href="<?= base_url(); ?>index.php/Recomendaciones/index/" data-ajax="false" style="background-color:#67EC69;"></a>
          <?php
            //$chats->result();

            foreach ($recomendacion->result() as $row) {

           ?>
          <div class="ui-grid-a">



              <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:300px; width:600px;"><?= $row->rec_descripcion; ?></div></div>
              <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:300px; width:500px;"><center><img src="<?php echo base_url(); ?><?= $row->rec_foto;?>" style="height:210px; width:300px; background-color:#67EC69;" alt=""></center></div></div>

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
