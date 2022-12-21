<?php

include "conn.php";

session_start();
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];


if ($result = $conexion -> query("SELECT correo, contrasena, activo, administrador FROM usuarios WHERE '$correo' = correo AND '$contrasena' = contrasena AND activo = '1' AND administrador = '1'")) {
    if($result -> num_rows == 1){
        $obj = $result->fetch_object();

            echo "Contraseña Valida";
            $_SESSION['SessionState']="Active";
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
    echo "Contraseña inválida";
    $_SESSION['SessionState']="Inactive";
    session_unset();
    session_destroy();
}
$conexion -> close();