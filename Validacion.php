<?php

require'conexion.php';

$Nit=$_POST['Nit'];
$Contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Nit']=$Nit;

$consulta="SELECT*FROM empresa where Nit='$Nit' and contraseña='$Contraseña'";
$resultado= $mysqli->query($consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("location:Menu.php");

} else{
  echo  "ERROR EN LA AUTENTICACION";
  }
  echo "<a href='Registro.php' class='btn btn-primary'>Ir a registro</a>";
?>
<?php
mysqli_free_result($resultado);
mysqli_close($mysqli);
