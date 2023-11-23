<?php
    require_once "../../Conexion/conexion.php";
    require_once "../../Modelo/Horario.php";
    require_once "../../Controlador/Horarios.php";

    if(isset($_GET["id"])){
        $ob = new Horarios();
        if($ob->abrirConexion()){
            $h= new Horario();
            $h->setId($_GET["id"]);
            $hora= $ob->obtener($h); 
            $ob->cerrarConexion();

        }else{ 
            
            echo"Error!";
        }


    }
?>


<!doctype html>
<html lang="es">

<head>
  <title>Titulo</title>
  <link rel="shrtcut icon" href="img/logo.png"/>
  <meta name="author" content="Godoy Valeria"/>
  <meta name="description" content="Horario"/>
  <meta name="keywords" content="hora"/>
  <meta name="robots" content="index"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <header>
    <h1>Horario</h1>
  </header>

  <main>
    
        <h1>Editar Horario</h1>

    <hr>

    
    <form action="preparar.php" method="POST">

    <h4>Está seguro de eliminar el Horario "<?php echo $hora->getId();?>"</h4>
    
        <button type="submit" name="btn_borrar">Borrar</button>

    </form>
        <form action="index.php" method="POST">
            <button type="submit" name="btn_volver">Volver</button>
        </form>
    <hr>
  </main>

  <footer>
    <h1>Info</h1>
    <h4>Creado por: ValeG</h4>
  </footer>
      
</body>

</html>