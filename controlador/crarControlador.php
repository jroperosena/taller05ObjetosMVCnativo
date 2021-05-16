<?php

require '../modelo/gestion.php';



if((isset($_POST['codigo'])) && 
(!empty($_POST['codigo'])) && 
(isset($_POST['nombre'])) && 
(!empty($_POST['nombre'])) && 
(isset($_POST['ciudad'])) && 
(!empty($_POST['ciudad'])) && 
(isset($_POST['telefono'])) && 
(!empty($_POST['telefono'])) ) {

  //  instanciar la classe

  $datos = new servcioDatos();

  if(!$datos->Existe($_POST['codigo']))
        $entradaDatos = $datos->setDatos($_POST['codigo'], $_POST['nombre'], $_POST['ciudad'],$_POST['telefono']);
     else
         $msj = "El Codigo ".$_POST['codigo']." Ya EXISTE !!!!! ";
 

  //$ver = new servcioDatos();

       $lista=$datos->getDatos();
       $vista="listar.php";
       require ("../vistas/layout.php");


} else {

    $vista="crear.php";
     require ("../vistas/layout.php");
    
} 



?>
