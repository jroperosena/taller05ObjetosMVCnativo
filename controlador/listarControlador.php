<?php

require '../modelo/gestion.php';

$datos = new servcioDatos();

$lista=$datos->getDatos();

       $vista="listar.php";
       require ("../vistas/layout.php");




?>
