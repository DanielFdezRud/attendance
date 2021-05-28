<?php
$servername = "192.168.9.216";
$database = "moodle";
$username = "usuariomoodle";
$password = "ira491";
$mysqli = new MySQLi($servername, $username, $password, $database);
$id =  $_POST['idAtt'];

if ($mysqli->connect_errno) {
    printf("Conexion fallida: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT course FROM mdl_course_modules WHERE id = " . $id;

if ($resultado = $mysqli->query($query)) {
    if ($fila = $resultado->fetch_assoc()) {
        $curso_id = $fila["course"];
    }
    $resultado->free();
}

$query3 = "SELECT category FROM mdl_course WHERE id = " . $curso_id;

if ($resultado = $mysqli->query($query3)) {
    if ($fila = $resultado->fetch_assoc()) {
        $category_id = $fila["category"];
    }
    $resultado->free();
}

$query4 = "SELECT name FROM mdl_course_categories WHERE id = " . $category_id;

if ($resultado = $mysqli->query($query4)) {
    if ($fila = $resultado->fetch_assoc()) {
        $curso = $fila["name"];
        echo json_encode($curso);
    }
    $resultado->free();
}
?>

