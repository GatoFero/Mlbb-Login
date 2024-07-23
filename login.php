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
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $connection->query($sql);

    // Comprobar
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: index.html?error=Usuario o clave inválida");
        exit();
    }

    $connection->close();
?>