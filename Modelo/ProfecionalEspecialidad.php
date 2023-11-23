<?php

class ProfecionalEspecialidad{
   private $id;
   private $profesional_id;
   private $especialidad_id;


   
   public function __construct(){
    $this->setId(0);
    $this->setProfesional_id(0);
    $this->setEspecialidad_id(0);
   }

   function setId($id){
    $this->id=$id;
   }

   function getId(){
    return $this->id;
   }

   function setProfesiopnal_id($profesional_id){
      $this->profesional_id=$profesional_id;
   }
  
   function getProfesiopnal_id(){
      return $this->profesional_id;
   }

   function setEspecialidad_id($especialidad_id){
      $this->especialidad_id=$especialidad_id;
   }
  
   function getEspecialidad_id(){
      return $this->especialidad_id;
   }


}


?>