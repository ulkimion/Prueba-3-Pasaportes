
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
  .div1 {
  border: 5px  rgb(255, 255, 255);
  background-color: rgb(197, 215, 222);
  height: 400px;
  width: 18%;
  margin-top: 5px; 
  margin-right: 17px; 
  text-align: center;
  float: right;
  }

  .div2{
  border: 5px  rgb(255, 255, 255);
  background-color: rgb(45, 123, 154);
  height: 200px;
  width: 18%;
  margin-top: 50px; 
  margin-left: 17px; 
  text-align: center;
  float: left;
  }

  .usuario{
  background-color: rgb(45, 123, 154);
  height: 30px;
  width: 100%;
  text-align: center;
}

</style>
</head>
<body>
<?php
session_start();

if(empty($_SESSION['SessionState'])){
    $_SESSION['SessionState'] = "Inactive";
}

?>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              <?php
              if($_SESSION["SessionState"]=="Active") 
              {echo " 
                <a class='nav-link' href='listausuarios.php'>Lista Personas</a> 
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
         
        </div>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1s">
            <img src="carrusel/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="carrusel/img2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="carrusel/img3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="div2">ayuda</div>
      <div class="div1">ayuda</div>
      <div class="div1">ayuda</div>
      <div class="div1">ayuda</div>



      <footer class="text-center text-white fixed-bottom" style="background-color: #221144;">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          Tecnología Multimedia - CIF 6558 - 06/11/2022  <br>
            Benjamin Gonzalez Fredes <br>
            Nicolas Cepeda Zamorano

        </div>
      </footer>

</body>
</html>