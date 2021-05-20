
<p class="estiloTitulo"> Delle Persona</p>


<?php
/*
echo "<pre>";
var_dump($persona);
echo "</pre>";
*/
?>



<div> 


<div>
       <div> <?php echo $persona['codigo'] ?> </div>
 </div>

 <div>
       <div><?php echo $persona['nombre'] ?></div>
 </div>

 <div>
       <div> <?php echo $persona['ciudad'] ?> </div>
 </div>


 <div>
       <div> <?php echo $persona['telefono'] ?> </div>
 </div>

<div>
<a href="../controlador/formularioEditarControlador.php?id=<?php echo $persona['codigo'] ?>" > Editar </a> 
   
  <a href="../controlador/formularioBorrarControlador.php?id=<?php echo $persona['codigo'] ?>" > Borrar </a> 
</div>
 




<!--main o contenido principal -->
