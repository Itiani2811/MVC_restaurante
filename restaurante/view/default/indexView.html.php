<?php use restaurante\myConfig\myConfig as config ?>
<?php include config::getPath() . 'view/partial/head.php' ?>
<h1>Hola desde la vista</h1>
La respuesta a 2 + 5 es: <?php echo $respuesta ?>
<br>
<?php echo $mensaje ?>
<?php include config::getPath() . 'view/partial/foot.php' ?>