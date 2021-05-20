<?php

/*
echo "<pre>";
var_dump($lista);
echo "</pre>";
*/

if (isset($msj)) 
      echo $msj;

echo "<table id='customers'>";
echo "<tr>";
echo "<th> Codigo </th>";
echo "<th> Nombre </th>";
echo "<th> Ciudad </th>";
echo "<th> Telefono </th>";
echo "<th> </th>";
echo "<th> </th>";
echo "<th> </th>";
echo "</tr>";

foreach($lista as $per) {

    echo "<tr>";
    echo "<td>".$per['codigo']."</td>";
    echo "<td>".$per['nombre']."</td>";
    echo "<td>".$per['ciudad']."</td>";
    echo "<td>".$per['telefono']."</td>";
    echo "<td> <a href='../controlador/formularioEditarControlador.php?id=".$per['codigo']."' > Editar </a> </td>";
    echo "<td> <a href='../controlador/formularioDetalleControlador.php?id=".$per['codigo']."' > Detalle </a> </td>";
    echo "<td> <a href='../controlador/formularioBorrarControlador.php?id=".$per['codigo']."' > Borrar </a> </td>";
    echo "<tr>";

}

echo "</table>";

?>