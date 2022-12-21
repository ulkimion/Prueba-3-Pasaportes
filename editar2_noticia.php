<?php
include "conn.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
    <style>
  .usuario{
  background-color: rgb(45, 123, 154);
  height: 30px;
  width: 100%;
  text-align: center;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark"">
    
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
              <?php
              if($_SESSION["SessionState"]=="Active") 
              {echo " 
                <a class='nav-link active' href='listausuarios.php'>Lista Personas</a> 
                <a class='nav-link' href='lista_noticias.php'>Noticias</a>
                <a class='nav-link' href='estadisticas.php'>Estadisticas</a>";
                if($_SESSION['SessionAdmin']==1){
                  echo '<a class="nav-link" href="admin_registros.php">Administrar</a>
                  <a class="nav-link" href="registrar_noticia">Ingresar Noticia</a>';
                }
              } else {
                echo "<a class='nav-link' href='ingresar.php'>Ingresar</a>";
                echo "<a class='nav-link' href='registro.php'>Registrarse</a>";
              }
              if($_SESSION["SessionState"]=="Active") 
              {echo "<a class='nav-link' href='logout.php'>Salir</a>";}
             ?>
             
            </div>
          </div>
        </div>
        
      </nav>
      <div class="usuario">

        <?php      
      if ($_SESSION["SessionState"]=="Active"){
        echo $_SESSION['SessionCorreo'];
        }  
      else { echo "Aun no a ingresado";}
         ?>

      </nav>
<?php 

$id = $_REQUEST['id'];
$titulo = $_POST["titulo"];
$cuerpo = $_POST["cuerpo"];
$fecha = $_POST ["fecha"];
echo "<br>";
echo "$titulo";
echo "<br>";
echo "$cuerpo";
echo "<br>";
echo "$fecha";
echo "<br>";

$sql="UPDATE noticias SET titulo = '$titulo' , cuerpo = '$cuerpo', fecha = '$fecha' WHERE id='$id'";


if($conexion->query($sql)===TRUE)
{
    echo "Se actualizo con éxito";
}
else
{
    echo "Error al actualizar".$sql."<br>".$conexion->error;
}
$conexion->close();


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