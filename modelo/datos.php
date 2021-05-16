<?php

class Datos {

    public $lista=[];
    public $url="../assets/json/listaPersonas.json";


   public function __construct() {

    $path=$this->url;

    if(file_exists($path)) {
        $datosLista = file_get_contents($path);
        $this->lista= json_decode($datosLista, true);
     } else {
        $this->lista=[];
     }

   }


   public function salvar($nLista) {
    $path=$this->url;  
    $jsonString = json_encode($nLista);
    file_put_contents($path,$jsonString);
   }





}
?>