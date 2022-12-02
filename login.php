<?php

include "conn.php";


$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];


if ($result = $conexion -> query("SELECT correo, contrasena, activo, administrador FROM usuarios WHERE '$correo' = correo AND '$contrasena' = contrasena AND activo = '1' AND administrador = '1'")) {
    if($result -> num_rows == 1){
        $obj = $result->fetch_object();

            echo "Contraseña Valida";
            setcookie("CORREO", $correo, time()+3600);
                echo "<br> admin";
            setcookie("ADMIN", '1', time()+3600);
            }
} else if ($result = $conexion -> query("SELECT correo, contrasena, activo, administrador FROM usuarios WHERE '$correo' = correo AND '$contrasena' = contrasena AND activo = '1' AND administrador = '0'")) {
    {
        if($result -> num_rows == 1){
            $obj = $result->fetch_object();
    
                echo "Contraseña Valida";
                setcookie("CORREO", $correo, time()+3600);
                    echo "<br> no admin";
                setcookie("ADMIN", '0', time()+3600);
                }
            }
}
else{    
    echo "Error en la consulta";
}
$conexion -> close();