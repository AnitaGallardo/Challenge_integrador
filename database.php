<?php

$servername = "";
$username = "admin";
$password = "admin";
$dbname = "Listado de Productos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}


include 'database.php';

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'agregar':
            $id = $_POST['id'];
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];

            $resultado = agregarProducto($id, $codigo, $nombre, $categoria);

            if ($resultado) {
                echo "Producto agregado con éxito";
            } else {
                echo "Error al agregar el producto";
            }

            break;
    }
}
?>
