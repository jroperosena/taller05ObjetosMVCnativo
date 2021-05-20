<?php

require '../modelo/gestion.php';

$ver = new servcioDatos();

if(isset($_GET['id'])) {

    $persona=$ver->getObjeto($_GET['id']);
    $vista="detalle.php";
    require ("../vistas/layout.php");
    
}else {

$lista=$ver->getDatos();

       $vista="listar.php";
       require ("../vistas/layout.php");

    }


?>
