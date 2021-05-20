
<p class="estiloTitulo"> Borrar  Persona</p>


<?php
/*
echo "<pre>";
var_dump($persona);
echo "</pre>";
*/
?>



<div> 

<h3> Esta Seguro de Eliminar  los siguites datos</h3>

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
 <form action="../controlador/borrarControlador.php" method='post'>
<input type="hidden" name="codigo" value="<?php echo $persona['codigo'] ?>">
  <button  class="estiloLi "type="submit">Borrar Datos </button></div>
</form>

</div>



<!--main o contenido principal -->
