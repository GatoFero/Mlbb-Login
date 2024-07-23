<?php
    session_start();

    // Conexión
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "login_project";

    $connection = new mysqli($servername, $username, $password, $dbName);

    if ($connection->connect_error) {
        die("Error al conectarse a la base de datos: " . $connection->connect_error);
    }

    // Obtener datos
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Consulta
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $connection->query($sql);

    // Comprobar
    if ($result) {
        header("Location: index.html?registro=Se registro correctamente");
        exit();
    }
    // Cerrar conexión
    $connection->close();
?>