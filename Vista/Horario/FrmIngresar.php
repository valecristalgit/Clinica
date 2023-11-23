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
    <a href="FrmIngresar.php">
        Nuevo Horario
    </a>

    <hr>

    <form action="preparar.php" method="POST">

            <b><label for="id">Identificador<label></b><br>
            <input class="nano" type="number" redonly name="id" value="0"><br>

            <b><label for="descripcion">Descripción</label></b><br>
            <input class="micro" type="text" name="descripcion" value=""><br>

            <b><label for="orden">Orden<label></b><br>
            <input class="nano" type="number" name="orden" min="1" value="1"><br>

            <button type="submit" name="btn_nuevo">Guardar</button>

    </form>

   
    <hr>
  </main>

  <footer>
    <h1>Info</h1>
    <h4>Creado por: ValeG</h4>
  </footer>
      
</body>

</html>