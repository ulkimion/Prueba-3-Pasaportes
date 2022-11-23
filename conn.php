<?PHP
include "datos.php";

$conexion= new mysqli($servername,$username,$password,$db);

if ($conexion->connect_error)
{
    die("conexion erronea".$conexion->connect_error);
}


?>