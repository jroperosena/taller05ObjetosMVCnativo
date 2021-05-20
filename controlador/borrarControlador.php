<?php

require '../modelo/gestion.php';





  //  instanciar la classe
  $datos = new servcioDatos();
/*
  echo "codigo ".$_POST['codigo']." <br>";
  echo "nombre ".$_POST['nombre']." <br>";
  echo "ciudad ".$_POST['ciudad']." <br>";
  echo "telefono ".$_POST['telefono']." <br>";
*/
        $entradaDatos = $datos->deleteDatos($_POST['codigo']);
    


echo "mostrar lista  <br>";
$lista=$datos->getDatos();
$vista="listar.php";
require ("../vistas/layout.php");



?>
