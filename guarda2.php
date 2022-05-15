<?php

require'conexion2.php';

$Nombre=$_POST['Nombre'];
$Cedula=$_POST['Cedula'];
$Cargo=$_POST['Cargo'];

$sql = "INSERT INTO Hojas (Nombre, Cedula, Cargo, activo) VALUES ('$Nombre' , '$Cedula' , '$Cargo' , 1)";

$resultado = $mysqli->query($sql);

if ($resultado>0) {
  echo "Registro Agregado";
  } else {
  echo "Error al agregar";
}
echo "<a href='Hojas.php' class='btn btn-primary'>Regresar </a>";

?>
