<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark"">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
              <a class="nav-link" href="registro.php">Ingresar Persona</a>
              <a class="nav-link" href="listausuarios.php">Lista Personas</a>
              <a class="nav-link" href="estadisticas.php">Estadisticas</a>
            </div>
          </div>
        </div>
      </nav>
<?php 

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$rut = $_POST["rut"];
$fecha_nacimiento = $_POST ["fecha_nacimiento"];
$nacionalidad = $_POST ["nacionalidad"];
$genero = $_POST ["genero"];
$ciudad_residencia = $_POST["ciudad_residencia"];

echo "$nombres $apellidos";
echo "<br>";
echo "$rut";
echo "<br>";
echo "$fecha_nacimiento";
echo "<br>";
echo "$nacionalidad";
echo "<br>";
echo "$genero";
echo "<br>";
echo "$ciudad_residencia";
echo "<br>";

include "conn.php";
include "uploadimage.php";
$sql="INSERT INTO usuarios(nombres, apellidos, nacionalidad, genero, ciudad_residencia, foto, fecha_nacimiento, rut) 
values('$nombres','$apellidos','$nacionalidad','$genero','$ciudad_residencia','$target_file','$fecha_nacimiento','$rut')";
if($conexion->query($sql)===TRUE)
{
    echo "Los registros se ingresaron con éxito";
}
else
{
    echo "Error en el ingreso".$sql."<br>".$conexion->error;
}
$conexion->close();

            include "generarqr.php" 

?>

<footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          Tecnología Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>