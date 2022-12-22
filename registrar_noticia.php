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
  .texto{
    color:white;
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
      else { echo "Noticias no registrada";}
         ?>
      <form action="procesar_noticia.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Titular</td>
                    <td> <input type="text"  name="titulo" required></td>
                </tr>                             
                <tr>
                    <td>Cuerpo</td>
                    <td> <textarea  name="Cuerpo" rows="5" cols="10" required> </textarea> </td>
                </tr>
                
                <tr>
                    <td>Autor</td>
                    <td> <input type="text"  name="Autor" required></td>
                </tr>
                <tr>
                    <td>Fecha de emisión</td>
                    <td> <input type="date"  name="fecha" required></td>
                </tr>
                <tr>
                    <td>Categoría</td>
                    <td> 
                        <select name="categoria">
                            <option value="deportes">Deportes</option>
                            <option value="nacional">Nacional</option>
                            <option value="internacional">Internacional</option>
                            <option value="cultura">Cultura Popular</option>
                        </select>
                </td>
                </tr>
              
                
                <tr>
                    <td>
                    <label for="fileToUpload">imagen:</label>
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


      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Tecnología Multimedia - CIF 6558 - 06/11/2022 <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>