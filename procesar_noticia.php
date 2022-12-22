

<?php 

$titulo = $_POST["titulo"];
$Cuerpo = $_POST["Cuerpo"];
$Autor = $_POST["Autor"];
$fecha = $_POST ["fecha"];
$categoria = $_POST ["categoria"];


echo "$titulo";
echo "<br>";
echo "$Cuerpo";
echo "<br>";
echo "$fecha";
echo "<br>";
echo "$Autor";
echo "<br>";
echo "$categoria";
echo "<br>";


include "conn.php";
include "uploadimagenoticia.php";
$sql="INSERT INTO noticias(titulo, cuerpo, visitas, fecha, Autor, categoria, imagen) 
values('$titulo','$Cuerpo','0','$fecha','$Autor','$categoria','$target_file')";
if($conexion->query($sql)===TRUE)
{
    echo "Los registros se ingresaron con éxito";
}
else
{
    echo "Error en el registro".$sql."<br>".$conexion->error;
}
$conexion->close();

            

?>