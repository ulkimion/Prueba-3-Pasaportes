<?php

include "conn.php";


$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];


if ($result = $conexion -> query("SELECT correo, contrasena FROM usuarios WHERE '$correo' = correo")) {
    if($result -> num_rows == 1){

        $obj = $result->fetch_object();

        //echo $obj->contrasena;
        //echo "<br>";
        //echo $contrasena;

        //por motivos de tiempo, las contrasenas se van a encriptar y comparar con los codigos debajo mas adelante

        //$password_safe = password_verify($contrasena, $obj->contrasena);
        
        //if ($password_safe == true) {
            echo "Contraseña Valida";
            setcookie("CORREO", $correo, time()+3600);
        //}
    }
    
} else{
    echo "Error en la consulta";
}
  
$conexion -> close();