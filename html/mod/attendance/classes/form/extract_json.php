<?php
$servername = "192.168.9.216";
$database = "moodle";
$username = "usuariomoodle";
$password = "ira491";
$mysqli = new \MySQLi($servername, $username, $password, $database);

if ($mysqli->connect_errno) {
    printf("Conexion fallida: %s\n", $mysqli->connect_error);
    exit();
}
$consulta = "SELECT value FROM mdl_config WHERE id = 511";
if ($resultado = $mysqli->query($consulta)) {
    if ($fila = $resultado->fetch_assoc()) {
        $res = $fila["value"];
        echo json_encode($res);
    }
    $resultado->free();
}
$mysqli->close();
