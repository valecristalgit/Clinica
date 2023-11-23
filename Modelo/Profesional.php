<?php

class Profesional{
   private $id;
   private $apellido;
   private $nombre;
   private $matricula;
   private $titulo_profesional;
   private $email;
   private $celular;
   private $foto;
   private $estado;

   
   public function __construct(){
    $this->setId(0);
    $this->setApellido("");
    $this->setNombre("");
    $this->setMatricula(0);
    $this->setTitulo_profesional("");
    $this->setEmail("");
    $this->setCelular(0);
    $thss->setFoto("");
    $this->setEstado(false);
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

   function setMatricula($matricula){
      $this->matricula=$matricula;
   }
  
   function getMatricula(){
      return $this->matricula;
   }

   function setTitulo_profesional($titulo_profesional){
      $this->titulo_profesional=$titulo_profesional;
   }
  
   function getTitulo_profesional(){
      return $this->titulo_profesional;
   }

   function setEmail($email){
      $this->email=$email;
    }
   function getEmail(){
      return $this->email;
    }

   function setCelular($celular){
      $this->celular=$celular;
    }
   function getCelular(){
      return $this->celular;
    }

   function setFoto($foto){
      $this->foto=$foto;
    }
   function getFoto(){
      return $this->foto;
    }

   function setEstado($estado){
      $this->estado=$estado;
    }
   function getEstado(){
      return $this->estado;
    }

}

?>