<?php if (session_status()==1)session_start();?>
<?php 
foreach(automoviles_controllers::Mostrar() as $autos){  
    $id_comparacion = $autos->getid_producto()?>
    <?php if(seg::decodificar($id) == $id_comparacion){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title. $autos->getTitlecar()?></title>
    <link rel="stylesheet" href="resource/assets/css/main.css">
</head>
<?php }}?>
<body>