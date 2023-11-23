<?php

class ObrasSocial{
   private $id;
   private $descripcion;
   
   public function __construct(){
    $this->setId(0);
    $this->setDescripcion("");
   }

   function setId($id){
    $this->id=$id;
   }

   function getId(){
    return $this->id;
   }

   function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
   }

   function getDescripcion(){
    return $this->descripcion;
   }

}


?>