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

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Rut</th>
            <th scope="col">Aprobar</th>
            <th scope="col">Eliminar</th>
            </tr>
    </thead>

    <?php 

$query = mysqli_query($conexion,"SELECT id, nombres, apellidos, nacionalidad, genero, ciudad_residencia, foto, fecha_nacimiento, rut, activo, administrador FROM usuarios");

$result = mysqli_num_rows($query);
if($result > 0){

    while ($data = mysqli_fetch_array($query)){
      if ($data["activo"] == 0 && $data["administrador"] == 0){
?>
<tr>
    <td><?php echo $data["id"]; ?></td>
    <td><?php echo $data["nombres"]; ?></td>
    <td><?php echo $data["apellidos"]; ?></td>
    <td><?php echo $data["rut"]; ?></td>

    <td><a href="aprobar_usuario.php?id=<?php echo $data['id'];?>"><button type='button' 
    class='btn btn-info btn-outline-secondary'>Aprobar</button></a></td>

    <td><a href="eliminar_usuario.php?id=<?php echo $data['id'];?>"><button type='button' 
    class='btn btn-danger btn-outline-secondary'>Eliminar</button></a></td>

</tr>
<?php
      }
    }
}
?>



</table>
      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022 <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>