<?php 
    include("../../conexion/conexion.php");
 
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.

    $conn = new Conexion();
    $sql = "INSERT INTO usuario (nombre, email, pass, id_localidad) VALUES ('".$_POST["nombre"]."','".$_POST["email"]."','".$_POST["pass"]."','".$_POST["departamento"]."')";
    $user = $conn->insertar($sql);
    $conn->cerrarConexion();

    echo "{'error':0}";
?>