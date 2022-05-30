<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
  
</head>
<body>

    
    <?php
    $consulta="SELECT nombre FROM trabajador where usuario='$usuario'";
    $filas = mysqli_fetch_assoc($resultado);
    echo "<h1>Bienvenido " .$filas["nombre"] ."</h1>"; 
    ?>

        <div style="text-align:center !important;">
        <p style="text-align:center !important; color: rgb(164, 164, 164);">Realizado por pipe_andres</p>
        </div>
        <link rel="stylesheet" href="navbar.js">
</body>
</html>