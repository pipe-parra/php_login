<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    


    
</head>
<body>
<!-- aca empieza header -->

<!-- aca empieza el formulario -->
    <div class="content">
        <div class="text">
          Login
        </div>
        <form action="validar.php" method="POST">
          <div class="field">
            <input input type="text" name="usuario" placeholder="Ingrese su nombre" required>
            <span class="fas fa-user"></span>
            
          </div>
          <div class="field">
              <div>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <span class="fas fa-lock"></span>
        </div>
          </div>
          <button  type="submit" value="Ingresar">Ingresar</button>
         
        </form>
      </div>
      

        <div style="text-align:center !important;">
         <p style="text-align:center !important; color: rgb(164, 164, 164);">Realizado por pipe_andres</p>
        </div>
        <link rel="stylesheet" href="navbar.js">
</body>
</html>