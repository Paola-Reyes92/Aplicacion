<?php

require'conexion.php';

$Nit=$_POST['Nit'];
$Correo=$_POST['Correo'];
$Contraseña=$_POST['Contraseña'];
$sql = "INSERT INTO empresa (Nit, Correo, Contraseña) VALUES ('$Nit' , '$Correo' , '$Contraseña')";

$resultado = $mysqli->query($sql);

if ($resultado>0) {
  echo "Registro Agregado";
  } else {
  echo "Error al agregar";
}
echo "<a href='Index.php' class='btn btn-primary'>Regresar </a>";

?>
