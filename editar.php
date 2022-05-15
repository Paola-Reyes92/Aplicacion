<?php
require 'conexion2.php';

$id= $_GET['id'];

$sql="SELECT ID, Nombre, Cedula, Cargo FROM Hojas WHERE id=$id";
$resultado=$mysqli->query($sql);

$fila=$resultado->fetch_assoc();
 ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <title>Registro</title>
  </head>
  <body>
    <div class="container">
    <div class="row">
      <h1>Registro de usuario</h1>
      <form id="registro" name="registro" method="post" action="guarda.php" autocomplete="off">
        <div class="mb-3">
          <label for="Nit" class="form-label">Nit</label>
          <input type="text" class="form-control" id="Nit" name="Nit" placeholder="Introduce el Nit" Value="<?php echo $fila['Nit']; ?>"  autofocus required>
        </div>
        <div class="mb-3">
          <label for="Correo" class="form-label">Correo</label>
          <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Introduce el Correo"required>
        </div>
        <div class="mb-3">
          <label for="Contraseña" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="Contraseña" name="Contraseña" placeholder="Introduce la Contraseña" required>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" id="guarda" name="guarda" type="submint">Continuar</button>
          <button class="btn btn-primary" id="salir" name="salir" type="submint">Salir</button>
        </div>
      </form>
      </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </div>
  </body>
</html>
