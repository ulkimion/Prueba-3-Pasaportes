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
  height:30px;
  width: 100%;
  text-align: center; 
}

</style>
</head>
<body>
        <?php require 'menu.php'; ?>

      <div class="usuario">

        <?php      
      if ($_SESSION["SessionState"]=="Active"){
        echo $_SESSION['SessionCorreo'];
        }  
      else { echo "Aun no a ingresado";}
         ?>

      <?php
                $id = $_REQUEST['id'];
                $sql = "SELECT * from noticias WHERE id=$id";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "
                        <img alt='' src='img/" . $row['imagen'] . "' class='foto' display='inline-block' width='100%' height='auto%'>
                  ";
                    }
                }
                ?>

            </div>
            <div class="col-md-5 col-sm-12">
                <?php
                $sql = "SELECT * from noticias WHERE id=$id";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<br>
                                <b>Titulo</b>: " . $row['titulo'] . "<br>
                                <b>Fecha</b>: " . $row['fecha'] . "<br>
                                <b>Cuerpo</b>:" . $row['cuerpo'] . "<br>
                                <b>Visitas</b>:" . $row['visitas'] . "<br>
                                <br>";
                                $insert = "UPDATE noticias SET visitas = visitas+1 WHERE id=$id";
                              $update = $conexion->query($insert);
                    }
                }
              
              ?>
              
            </div>
        </div>



      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>