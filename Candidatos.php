<?php
 require 'conexion2.php';
 $sql="SELECT ID, Nombre, Cedula, Cargo FROM Hojas  where activo=1";
 $resultado=$mysqli->query($sql);
 ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" >

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <title>Candidatos</title>
    <script>
      $(document).ready(function() {
        $('#tabla').DataTable();
      } );
    </script>
  </head>
  <div class="container-fluid">
      <div class="row justify-content-center align-content-center">
          <div class="col-8 barra">
              <img src="images/logo.png" widht="40" height="50"> </img>
          </div>
          <div class="col-4 text-right barra">
              <ul class="navbar-nav mr-auto">
                  <li>
                      <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                      <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                          <a class="dropdown-item menuperfil cerrar" href="home.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                          </a>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="barra-lateral col-12 col-sm-auto">
              <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                  <a href="Home.php"><i class="fas fa-home"></i><span>Home</span></a>
                  <a href="Candidatos.php"><i class="fas fa-home"></i><span>Cliente</span></a>
                  <a href="Hojas.php"><i class="fas fa-pen"></i><span>Seleccion</span></a>
                  <a href="https://colombia.kibernum.com/"><i class="fas fa-home"></i><span>Nosotros</span></a>
              </nav>
          </div>
  <body>
    <div class="container">
    <div class="row">
      <h1>Listado de candidatos</h1>
      <table id="tabla" class="display" style="width:100%">
              <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>cedula</th>
                      <th>Cargo</th>
                      <th></th>
                      <th></th>
                    </tr>
              </thead>
              <tbody>
                <?php while($fila = $resultado -> fetch_assoc()) { ?>

                 <tr>
                   <td><?php echo $fila['Nombre']; ?></td>
                   <td><?php echo $fila['Cedula']; ?></td>
                   <td><?php echo $fila['Cargo']; ?></td>
                   <td><a href="editar.php?id= <?php echo $fila['id']; ?>" class="btn btn-warning">Editar</a></td>
                   <td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">eliminar</a></td>
                   </tr>
                  <?php  }?>

                </tbody>
              </table>
        </div>
        <script src="https://kit.fontawesome.com/646c794df3.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
      </form>
      </div>
    </div>


  </div>
  </body>
</html>
