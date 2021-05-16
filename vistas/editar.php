
<p class="estiloTitulo"> Editar Datos  Persona</p>


<?php
/*
echo "<pre>";
var_dump($persona);
echo "</pre>";
*/
?>



<div> 

<form action="../controlador/editarControlador.php" method='post'>

<div>
       <div> <input type="text" name="codigo" value="<?php echo $persona['codigo'] ?> "></div>
 </div>

 <div>
       <div> <input type="text" name="nombre" value="<?php echo $persona['nombre'] ?> "></div>
 </div>

 <div>
       <div> <input type="text" name="ciudad" value="<?php echo $persona['ciudad'] ?> "></div>
 </div>


 <div>
       <div> <input type="text" name="telefono" value="<?php echo $persona['telefono'] ?> "></div>
 </div>

 
 <div> <button  class="estiloLi "type="submit"> Guardar Cambios  </button></div>



</form>

</div>



<!--main o contenido principal -->
