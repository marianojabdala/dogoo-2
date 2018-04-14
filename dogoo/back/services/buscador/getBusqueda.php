<?php 
	include("../../conexion/conexion.php");

    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.

    
    $conn = new Conexion();
    $sql = "SELECT p.perro, p.descripcion, p.precio, p.foto FROM perros p INNER JOIN usuarioAperro uap ON p.id_perro = uap.id_perro INNER JOIN usuario u ON u.id_usuario = uap.id_usuario";
    
    $busqueda = $conn->consultar($sql);
    $conn->cerrarConexion();
    foreach($busquedas as &$l){
        $l = array_map('utf8_encode', $l);
    }    
    echo json_encode($busquedas);
?>
