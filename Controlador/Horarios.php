<?php

class Horarios extends Conexion{
    public function listar(String $req){
        $retorno=[];
        $datos = $this->query($req);
        foreach($datos as $key => $value){
            $hora= new Horario(); //instancia modelo
            $hora->setId($value["id"]);
            $hora->setDescripcion($value["descripcion"]);
            $hora->setOrden($value["orden"]);
            $retorno[]=$hora;
        }

        return $retorno;
    }

    public function ingresar(Horario $par){
        $ok=false;
        try{
            $sql= $this->prepare("INSERT INTO horarios(descripcion,orden) 
            VALUES(:descripcion,:orden)"); //prepare es un metodo de la clase PDO (que hereda sus métodos a nuestra clase conexion)
            $desc=$par->getDescripcion();//de los datos que me llegaron tomo el valor de descripción
            $ord=$par->getOrden();//de los datos que me llegaron tomo el valor de orden

            $sql->bindParam(":descripcion", $desc, PDO::PARAM_STR);
            $sql->bindParam(":orden", $ord, PDO::PARAM_INT);
            $sql->execute();
            $ok=true;
        }catch(PDOExeption $pdoex){
            echo " Error ". $pdoex->getMessage();
        }finally{
            return $ok;
        }
    }

    public function obtener(Horario $par){
        /*horario guarda objetos horario que retornan de la bd listados, en este 
        caso como accede por id (dato irrepetible) sólo selecciona un horario.*/
        $horarios = $this->listar("SELECT * FROM horarios WHERE id=".$par->getId());
        if(sizeof($horarios)>0){
            $horarios=$horarios[0]; /*Esto hace que horarios tome el valor del primer campo del objeto obtenido*/
        }else{
            $horarios=new Horario();
        }

        return $horarios;
    }

    public function editar(Horario $par){
        $ok=false;
        try{
            $preparar= $this->prepare("UPDATE horarios SET 
            descripcion=:descripcion, orden=:orden WHERE id=:id"); //variable tipo pdo son así :nombre_variable (este nombre deve ser 
            //igual al que tiene enfrente "id=:id") se la llama en bindParam
            $desc=$par->getDescripcion();
            $ord=$par->getOrden();
            $id=$par->getId();

            $preparar->bindParam(":descripcion", $desc, PDO::PARAM_STR);
            $preparar->bindParam(":orden", $ord, PDO::PARAM_INT);
            $preparar->bindParam(":id", $id, PDO::PARAM_INT);
            $preparar->execute();
            
            $ok=true;
        }catch(PDOExeption $pdoex){
            echo " Error ". $pdoex->getMessage();
        }finally{
            return $ok;
        }
    }

    public function borrar(Horario $par){
        $ok = false;
        try{
            $this->exect("DELETE FROM horarios WHERE id=".$par->getId());
            $ok=true;
        }catch(Exeption $ex){
            echo "Error".$ex->getMessage();
        }finally{
            return $ok;
        }
    }

    


}


?>