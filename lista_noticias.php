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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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
        <?php require 'menu.php'; ?>
      <div class="usuario">

        <?php      
      if ($_SESSION["SessionState"]=="Active"){
        echo $_SESSION['SessionCorreo'];
        }  
      else { echo "Aun no a ingresado";}
         ?>

    <br>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                
                $sql = "SELECT * from noticias ORDER BY id DESC";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {

                        echo "
                    <div class='col-md-4'>
                    <div class='card mb-4 box-shadow'>
                        <img class='card-img-top' data-src='holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail' alt='Thumbnail [100%x225]' style='height: 225px; width: 100%; display: block;' src='" . $row['imagen'] . "' data-holder-rendered='true'>
                        <div class='card-body'>
                        <p class='card-text'><b>" . $row['titulo'] . "</b></p>
                        <div class='d-flex justify-content-between align-items-center'>
                        <div class='btn-group'>
                            <a href='noticia.php?id=" . $row['id'] . "'target='_self'><button type='button' class='btn btn-sm btn-outline-secondary'>Ver noticia</button></a>
                            </div>";
                        if ($_SESSION['SessionAdmin'] == '1'){
                            echo"
                            <div class='btn-group'>
                            <a href='editar_noticia.php?id=" . $row['id'] . "'target='_self'><button type='button' class='btn btn-sm btn-outline-secondary'>Modificar</button></a>
                            </div>";
                        }
                           echo" <small class='text-muted'>" . $row['fecha'] . "</small>
                        </div>
                        </div>
                    </div>
                    </div>";
                    }
                }
                ?> <div class="col-12">
                    
                space <br>
                space <br>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          Tecnolog??a Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>

</html>