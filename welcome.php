<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mobile Legends</title>
</head>
<body id="fondo">
    <script src="javascript.js"></script>
    <main>
        <div class="container-login">
            <h1>Bienvenido, <?php echo $_SESSION['username'];?></h1>
            <div action="login.php" method="post" class="form-container">
                <div class="form-field">
                    <p style="width: 70%; text-align: center; margin: auto;">Gracias por formar parte de esta proyecto de prueba.</p>
                </div>
                <div class="form-button">
                    <button class="bg-secondary">
                        <a href="logout.php"><h2>Salir</h2></a>
                    </button>
                </div>
            </div>    
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Oswaldo Maguiño. Todos los derechos reservados.</p>
    </footer>
</body>
</html>