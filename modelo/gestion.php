<?php

require 'datos.php';

class servcioDatos  extends Datos {


    public function getDatos() {
        $datos = $this->lista;
        return $datos;
    }


    public function setDatos($codigo,$nombre, $ciudad, $telefono) {

        $persona = array(
            'codigo' => $codigo,
            'nombre' => $nombre,
            'ciudad' => $ciudad,
            'telefono' => $telefono
        );

        array_push($this->lista ,  $persona );
        $this->salvar($this->lista);
        return true;
    }


    public function Existe($codigo) {
        $aux = false;
        foreach ($this->lista  as $item)  {
            if ($item['codigo'] ==  $codigo) {
                $aux = true;
                return $aux;
            }
        }
        return $aux;

    }


     public function getObjeto($codigo) {

        foreach ($this->lista  as $item)  {
            if ($item['codigo'] ==  $codigo) {
               
                return $item;
            }
        }
        return null;

     }





}




?>