<?php
include('conn.php');

$id = $_REQUEST['id'];

$sql = "SELECT * from usuarios WHERE id=$id";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
{
    $query = mysqli_query($conexion,"UPDATE usuarios SET activo = 1 where id='$id'");
    header("location: admin_registros.php");
}
    }}

