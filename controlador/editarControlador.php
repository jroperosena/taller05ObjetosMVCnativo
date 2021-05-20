<?php

require '../modelo/gestion.php';



if((isset($_POST['nombre'])) && 
(!empty($_POST['nombre'])) && 
(isset($_POST['ciudad'])) && 
(!empty($_POST['ciudad'])) && 
(isset($_POST['telefono'])) && 
(!empty($_POST['telefono'])) ) {

  //  instanciar la classe
  $datos = new servcioDatos();
/*
  echo "codigo ".$_POST['codigo']." <br>";
  echo "nombre ".$_POST['nombre']." <br>";
  echo "ciudad ".$_POST['ciudad']." <br>";
  echo "telefono ".$_POST['telefono']." <br>";
*/
        $entradaDatos = $datos->updateDatos($_POST['codigo'], $_POST['nombre'], $_POST['ciudad'],$_POST['telefono']);
    
}

echo "mostrar lista  <br>";
$lista=$datos->getDatos();
$vista="listar.php";
require ("../vistas/layout.php");



?>
