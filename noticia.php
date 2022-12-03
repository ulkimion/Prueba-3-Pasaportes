<?php
include "conn.php";
?>
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
              <a class="nav-link" href="index.php">Inicio</a>
              <a class="nav-link" href="registro.php">Registrase</a>
              <a class="nav-link" href="listausuarios.php">Lista Personas</a>
              <a class="nav-link" href="ingresar.php">Ingresar</a>
              <a class="nav-link" href="lista_noticias.php">Noticias</a>
              <a class="nav-link" href="estadisticas.php">Estadisticas</a>
              <?php      
                if (isset($_COOKIE["ADMIN"]) == '1'){
                  ?>
                    <a class="nav-link" href="admin_registros.php">Administrar</a>
                    <a class="nav-link" href="registrar_noticia">Ingresar Noticia</a>
                  <?php } ?>
          </div>
        </div>
      </nav>

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
                    }
                }
              ?>
              
            </div>
        </div>
        <?php
        $query = mysqli_query($conexion,"SELECT nombres, apellidos, fecha_nacimiento, rut, nacionalidad, genero, ciudad_residencia, foto FROM usuarios where id=$id");
        $data = mysqli_fetch_array($query);
        if($resultado->num_rows > 0){
        ?>
        <tr>
        <td><a href="crear_pdf.php?id=<?php echo $data["id"]?>&nombres=<?php echo $data["nombres"]?>&apellidos=<?php echo $data["apellidos"]?>&fecha_nacimiento=<?php echo $data["fecha_nacimiento"]?>&rut=<?php echo $data["rut"]?>&nacionalidad=<?php echo $data["nacionalidad"]?>&genero=<?php echo $data["genero"]?>&ciudad_residencia=<?php echo $data["ciudad_residencia"]?>&foto=<?php echo $data["foto"]?>    ">
        <button type='button' class='btn btn-sm btn-outline-secondary'>Crear PDF</button></a></td>
        </tr>
        <?php
        }
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