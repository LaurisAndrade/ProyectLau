<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="jquery.mobile/jquery.mobile.icons-1.4.5.min.css">
    <link rel="stylesheet" href="jquery.mobile/jquery.mobile.structure-1.4.5.min.css">
    <script src="jquery.mobile/jquery.js"></script>
    <script src="jquery.mobile/jquery.mobile-1.4.5.js"></script>
  </head>
  <body>
    <!--Pagina Uno-->
  <div style="height:500px; width:500px;background-color: #fffff2 ;">
    <div data-role="page" id="page1">
      <div data-role="header" style=" height:500px; width:500px; background-color:#00cc55;">

      <h1><strong>WhatsApp</strong></h1>

        <div data-role="navbar">
          <ul>
            <li><a href="#" style="background-color:#00cc55;">ejercicio</a></li>
            <li><a href="#page2" style="background-color:#00cc55;">Estados</a></li>
            <li><a href="#page3" style="background-color:#00cc55;">Llamadas</a></li>
          </ul>
        </div>

      <div data-role="main">
        <?php
          //$ejercicio->result();


         ?>
        <div class="ui-grid-a">

          <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="width:200%;">
            <img src="<?php echo base_url(); ?><?= $row->foto;?>" style="height:60px; width:60px; " alt="">&nbsp;<a href="<?= base_url(); ?>index.php/cargar_tips/cargar_tips/<?= $row->id; ?>" data-ajax="false"><?= $row->nombre; ?></a> </div></div>
      </div>
      <?php

       ?>
   </div>
      </div>
      <div data-role="footer">

      </div>
    </div>

  </div>
  </body>
</html>
