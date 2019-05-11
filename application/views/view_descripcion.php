<?php
?>
<div style="height:300px; width:300px;background-color: #9CAAB1AA ;">
<?php
?>

<div style="height:70px; width:300px;background-color: #00cc55;">
<?php
foreach ($datos_chat->result() as $row) {
  ?>
  <img src="http://localhost/ProyectLau/<?=$row->foto; ?>" style="height:50px; width:50px; margin-left:10px; margin-top:10px;" alt="" >&nbsp;<a data-ajax="false"><?= $row->nombre; ?></a>
  <?php
}
?>
</div>
<br>
<br>
<?php
foreach ($descripcion->result() as $row) {

print $row->descripcion;

}
?>
</div>
<?php
 ?>
