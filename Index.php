<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <title>Ingreso</title>
  </head>
  <body>
    <body>

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
                                <a class="dropdown-item menuperfil cerrar" href="Home.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
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

                        <a href="https://colombia.kibernum.com/"><i class="fas fa-home"></i><span>Nosotros</span></a>
                    </nav>
                </div>
                <main class="main col">
                    <div class="row justify-content-center align-content-center text-center">
                        <div class="columna col-lg-6">
                          <div class="container">
                          <div class="row">
                            <h1></h1>
                            <div class="container">
                            <div class="row">
                              <h1>Ingreso de usuario</h1>
                              <form id="registro" name="registro" method="post" action="Validacion.php" autocomplete="off">
                                <div class="mb-3">
                                  <label for="Nit" class="form-label">Nit</label>
                                  <input type="text" class="form-control" id="Nit" name="Nit" placeholder="Introduce el Nit" autofocus required>
                                </div>
                                        <div class="mb-3">
                                  <label for="Contraseña" class="form-label">Contraseña</label>
                                  <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Introduce la Contraseña" required>
                                </div>
                                <div class="mb-3">
                                  <button class="btn btn-primary" id="guarda" name="guarda" type="submint">Continuar</button>
                                  </div>
                              </form>
                              </div>
                            </div>
                            </div>
                            </form>
                            </div>
                          </div>
                        </div>

                    </div>

                </main>
            </div>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>

  </div>
  </body>
</html>
