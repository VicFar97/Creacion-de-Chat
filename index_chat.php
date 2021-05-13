<?php
    include "DataBase/db.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat PHP AJAX MYSQL</title>
    
    <link rel="stylesheet" href="css/style-chat.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@300&display=swap" rel="stylesheet">
    
    

</head>
<body>

    <div id="container">
        <div id="caja-chat">
            <div id="chat"></div>
        </div>
        <form action="index_chat.php" method="POST">
            <input type="text" name="nombre" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
            if (isset($_POST['enviar'])) {
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];

                $consulta= "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);
                echo "<embed loop= 'false' src='audio.mp3' hidden='true' autoplay='true'>";
               
            }
        ?>
    </div>
    <script type="text/javascript"src="js/funcionesAjax.js"></script>
    
    
</body>
</html>