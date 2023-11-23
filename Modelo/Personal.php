<?php

class Personal{
   private $id;
   private $apellido;
   private $nombre;
   private $cargo_id;
   private $fecha_inicio;
   private $fecha_fin;

   
   public function __construct(){
    $this->setId(0);
    $this->setApellido("");
    $this->setNombre("");
    $this->setCargo_id(0);
    $this->setFecha_inicio("");
   }

   function setId($id){
    $this->id=$id;
   }

   function getId(){
    return $this->id;
   }

   function setApellido($apellido){
    $this->apellido=$apellido;
   }

   function getApellido(){
    return $this->apellido;
   }

   function setNombre($nombre){
    $this->nombre=$nombre;
   }

   function getNombre(){
    return $this->nombre;
   }

   function setCargo_id($cargo_id){
      $this->cargo_id=$cargo_id;
   }
  
   function getCargo_id(){
      return $this->cargo_id;
   }

   function setFecha_inicio($fecha_inicio){
      $this->fecha_inicio=$fecha_inicio;
   }
  
   function getFecha_inicio(){
      return $this->fecha_inicio;
   }

}

?>