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
    <a href="frmIngresar.php">
        Nuevo Horario
    </a>

    <hr>

    <table>
        <thead>
            <tr>
                <th>Acciones</th>
                <th>_______</th>
                <th>Id</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            require_once "../../Conexion/Conexion.php"; //require_once importa archivos
            require_once "../../Controlador/Horarios.php";
            require_once "../../Modelo/Horario.php";
            
            $ob_horario = new Horarios();
            if ($ob_horario->abrirConexion()){
                $rs= $ob_horario->listar("select * from horarios order by orden asc");//rs vva a ser un array con datos que lleguen de la bd
                foreach($rs as $kry =>$value){//recorre los datos y crea una fila para cada horario
                    echo "<tr>";
                    echo "<td><a href='frmEditar.php?id=".$value->getId()."'>Editar</a></td>";
                    echo "<td><a href='frmBorrar.php?id=".$value->getId()."'>Borrar</a></td>";
                    echo "<td>".$value->getId()."</td>";
                    echo "<td>".$value->getDescripcion()."</td>";
                    echo "</tr>";
                }
                $ob_horario->cerrarConexion();
            } else{
                echo "ERROR! No se pudo establecer la conexión con la base de datos.";
            }


            ?>
        </tbody>
    </table>
    <hr>
  </main>

  <footer>
    <h1>Info</h1>
    <h4>Creado por: ValeG</h4>
  </footer>
      
</body>

</html>