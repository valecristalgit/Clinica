<?php
    require_once "../../Conexion/conexion.php";
    require_once "../../Modelo/Horario.php";
    require_once "../../Controlador/Horarios.php";

    if(isset($_POST["btn_nuevo"])){
        //Recordatorio: las instancias se realizan para crear un objeto de o usar los metodos de.
        $ob = new Horarios(); //instancia del controlador
        if($ob->abrirConexion()){
            $h= new Horario();
            //seteamos los datos en el objeto h y posteriormente lo insertamos en la bd
            $h->setDescripcion($_POST["descripcion"]);
            $h->setOrden($_POST["orden"]);
            if($ob->ingresar($h)){
                echo"Registro ingresado correctamente
                
                <form action='index.php' method='POST'>
                <button type='submit' name='btn_volver'>Volver</button>                </form>";
            }else{
                echo"Error al intentar ingresar el registro
                
                
                <form action='index.php' method='POST'>
                <button type='submit' name='btn_volver'>Volver</button>                </form>
                ";
            }

            $ob->cerrarConexion();

        }else{ 
            
            echo"Error. No se conectó a la BD:
                
            <form action='FrmIngresar.php' method='POST'>
            <button type='submit' name='btn_volver'>Volver</button>
            </form>";
        }

    }
    
    if(isset($_POST["btn_editar"])){
        $ob = new Horarios(); 
        if($ob->abrirConexion()){
            $h= new Horario();
            $h->setId($_POST["id"]);
            $h->setDescripcion($_POST["descripcion"]);
            $h->setOrden($_POST["orden"]);
            if($ob->editar($h)){
                echo"Registro ingresado correctamente
                
                <form action='index.php' method='POST'>
                <button type='submit' name='btn_volver'>Volver</button>                </form>";
            }else{
                echo"Error al intentar ingresar el registro
                
                
                <form action='index.php' method='POST'>
                <button type='submit' name='btn_volver'>Volver</button>                </form>
                ";
            }
            $ob->cerrarConexion();
        }else{
            echo"Error. No se conectó a la BD:
                
            <form action='FrmIngresar.php' method='POST'>
            <button type='submit' name='btn_volver'>Volver</button>
            </form>";
        }
    }
/*
    if(isset($_GET["id"])){
        $ob = new Horarios(); 
        if($ob->abrirConexion()){
            $h= new Horario();
            $h->setId($_GET["id"]);

            if($ob->borrar($h)){
                echo"Se eliminó exitosamente
                
                <form action='index.php' method='POST'>
                <button type='submit' name='btn_volver'>Volver</button>                </form>";
            }else{
                echo"Error al eliminar!
                
                
                <form action='index.php' method='POST'>
                <button type='submit' name='btn_volver'>Volver</button>                </form>
                ";
            }
            $ob->cerrarConexion();
        }else{
            echo"Error. No se conectó a la BD:
                
            <form action='FrmIngresar.php' method='POST'>
            <button type='submit' name='btn_volver'>Volver</button>
            </form>";
        }
    }
*/

if(isset($_POST["btn_borrar"])){
    $ob = new Horarios(); 
    if($ob->abrirConexion()){
        $h= new Horario();
        $h->getId();
        if($ob->borrar($h)){
            echo"Se eliminó exitosamente
            
            <form action='index.php' method='POST'>
            <button type='submit' name='btn_volver'>Volver</button>                </form>";
        }else{
            echo"Error al eliminar!
            
            
            <form action='index.php' method='POST'>
            <button type='submit' name='btn_volver'>Volver</button>                </form>
            ";
        }
        $ob->cerrarConexion();
    }else{
        echo"Error. No se conectó a la BD:
            
        <form action='FrmIngresar.php' method='POST'>
        <button type='submit' name='btn_volver'>Volver</button>
        </form>";
    }
}


?>