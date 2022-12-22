
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              <?php
              if($_SESSION["SessionState"]=="Active") 
              {echo " 
                <a class='nav-link' href='listausuarios.php'>Lista Personas</a> 
                <a class='nav-link' href='lista_noticias.php'>Noticias</a>
                <a class='nav-link' href='estadisticas.php'>Estadisticas</a>";
                if($_SESSION['SessionAdmin']==1){
                  echo '<a class="nav-link" href="admin_registros.php">Administrar</a>
                  <a class="nav-link" href="registrar_noticia.php">Ingresar Noticia</a>';
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