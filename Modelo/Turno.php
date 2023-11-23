<?php

class Turno{
   private $id;
   private $profesional_id;
   private $especialidad_id;
   private $fecha;
   private $apellido_paciente;
   private $nombre_paciente;
   private $dni_paciente;
   private $obra_social;
   private $nro_creadencial;
   private $atencion_particular;
   private $motivo_turno;
   private $estado;


   
   public function __construct(){
    $this->setId(0);
    $this->setProfesional_id(0);
    $this->setEspecialidad_id(0);
    $this->setFecha("");
    $this->setApellido_paciente("");
    $this->setNombre_paciente("");
    $this->setDni_paciente(0);
    $this->setObra_social("");
    $this->Nro_creadencial(0);
    $this->setAtencion_particular("");
    $this->setMotivo_turno("");
    $this->setEstado(false);
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

   function setFecha($fecha){
      $this->fecha=$fecha;
   }
  
   function getFecha(){
      return $this->fecha;
   }

   function setApellido_paciente($apellido_paciente){
      $this->apellido_paciente=$apellido_paciente;
   }
     
   function getApellido_paciente(){
      return $this->apellido_paciente;
   }

   function setNombre_paciente($nombre_paciente){
      $this->nombre_paciente=$nombre_paciente;
   }
     
   function getNombre_paciente(){
      return $this->nombre_paciente;
   }

   function setDni_paciente($dni_paciente){
      $this->dni_paciente=$dni_paciente;
   }
     
   function getDni_paciente(){
      return $this->dni_paciente;
   }

   function setObra_social($obra_social){
      $this->obra_social=$obra_social;
   }
     
   function getObra_social(){
      return $this->obra_social;
   }

   function setNro_creadencial($nro_credencial){
      $this->nro_credencial=$nro_credencial;
   }
     
   function getNro_creadencial(){
      return $this->nro_credencial;
   }

   function setAtencion_particular($atencion_particular){
      $this->atencion_particular=$atencion_particular;
   }
     
   function getAtencion_particular(){
      return $this->atencion_particular;
   }

   function setMotivo_turno($motivo_turno){
      $this->motivo_turno=$motivo_turno;
   }
     
   function getMotivo_turno(){
      return $this->motivo_turno;
   }

   function setEstado($estado){
      $this->estado=$estado;
   }
     
   function getEstado(){
      return $this->estado;
   }
}


?>