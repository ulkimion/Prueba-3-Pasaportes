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

.titulo{
        text-align: center;
        font-size: 30px;
        text-transform: capitalize;
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
<div class= titulo>Editar</div>
<?php
                
                $id = $_REQUEST['id'];
            
                $sql = "SELECT * from usuarios WHERE id=$id";
                $resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
?>

      <form action="editar2.php?<?php echo'id=' . $row['id'] .'';?>" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>NOMBRE</td>
                    <td> <input type="text" value="<?php echo'' . $row['nombres'] .''; ?>" name="nombres" required></td>
                </tr>
                <tr>
                    <td>APELLIDO</td>
                    <td> <input type="text" value="<?php echo'' . $row['apellidos'] .''; ?>" name="apellidos" required></td>
                </tr>
                <tr>
                    <td>RUT</td>
                    <td> <input type="text" value="<?php echo'' . $row['rut'] .''; ?>" name="rut" required></td>
                </tr>
                <tr>
                    <td>CORREO</td>
                    <td> <input type="text" value="<?php echo'' . $row['correo'] .''; ?>" name="correo" required></td>
                </tr>
                <!-- Por motivos de tiempo, aun no se encriptara la contrasena, pero sera la primera cosa a hacer en la siguiente semana -->
                <tr>
                    <td>CONTRASENA</td>
                    <td> <input type="text" value="<?php echo'' . $row['contrasena'] .''; ?>" name="contrasena" required></td>
                </tr>
                <tr>
                    <td>FECHA DE NACIMIENTO</td>
                    <td> <input type="date" value="<?php echo'' . $row['fecha_nacimiento'] .''; ?>" name="fecha_nacimiento" required></td>
                </tr>
                <tr>
                    <td>NACIONALIDAD</td>
                    <td> 
                        <select name="nacionalidad" value="<?php echo'' . $row['nacionalidad'] .''; ?>">
                            <option value="Chilena">Chilena</option>
                            <option value="Canadiense">Canadiense</option>
                            <option value="Uruguay">Uruguaya</option>
                        </select>
                </td>
                </tr>
                <tr>
                    <td>GENERO</td>
                    <td> 
                        <input type="radio" name="genero" value="Femenino"> FEMENINO
                         <input type="radio" name="genero" value="Masculino"> MASCULINO
                         <input type="radio" name="genero" value="OTRO"> OTRO
                </td>
                </tr>
                <tr>
                    <td>CIUDAD DE RESIDENCIA</td>
                    <td> <input type="text" value="<?php echo'' . $row['ciudad_residencia'] .''; ?>" name="ciudad_residencia" required></td>
                </tr>
                <tr>
                    <td>
                    <label for="fileToUpload">Foto:</label>
                    <input type="file" id="fileToUpload" name="fileToUpload" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"  value="ENVIAR" name="enviar"> 
                    </td>
                </tr>
            </table>
        </form>

<?php 
                    }
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