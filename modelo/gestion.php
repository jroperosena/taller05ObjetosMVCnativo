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

        array_push($this->lista ,  $persona);
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


     public function updateDatos($codigo,$nombre, $ciudad, $telefono) {

        $nuevaLista = [];

        $persona = array(
            'codigo' => $codigo,
            'nombre' => $nombre,
            'ciudad' => $ciudad,
            'telefono' => $telefono
        );

        //echo "<pre>";
       // var_dump($persona);
       // echo "</pre>";

        $i = 0;
        foreach ($this->lista as $item)  {
            $a = intval($item['codigo']);
            $b = intval($persona['codigo']);
          //  echo "a  ".$a. " <br>";
          //  echo "b  ".$b. " <br>";

            if ( $a == $b){
               // echo "si  ".$i. " <br>";
                array_push($nuevaLista, $persona);

            } else {
               // echo "no  ".$i. " <br>";
                array_push($nuevaLista, $item);

            }
                $i++; 
        }

        //echo "<pre>";
        //var_dump($nuevaLista);
        //echo "</pre>";

        $this->salvar($nuevaLista);
        return true;
    }


    public function deleteDatos($codigo) {

        $nuevaLista = [];

        

        //echo "<pre>";
       // var_dump($persona);
       // echo "</pre>";

       
        foreach ($this->lista as $item)  {
            $a = intval($item['codigo']);
            $b = intval($codigo);
          //  echo "a  ".$a. " <br>";
          //  echo "b  ".$b. " <br>";

            if ( $a != $b){
                array_push($nuevaLista, $item);
            
            }
        }

        //echo "<pre>";
        //var_dump($nuevaLista);
        //echo "</pre>";

        $this->salvar($nuevaLista);
        return true;
    }







}




?>