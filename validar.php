<?php

$usuario= $_POST['usuario'];       
$contraseña= $_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

include('bd.php');
// $conexion=mysqli_connect("localhost", "root", "1234", "bdprint"); esta seria necesaria si quisiera conectar desde aqui pero preferi invocar desde otra

$consulta="SELECT*FROM trabajador where usuario='$usuario' and clave='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    include("home.php");
    // $consulta="SELECT nombre FROM trabajador where usuario='$usuario'";
    // $filas = mysqli_fetch_assoc($resultado);
    // echo "<h1>Bienvenido " .$filas["nombre"] ."</h1>"; 
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad" style="color:red">USUARIO NO EXISTE</h1>
    <a href="login.php">Volver</a>
    <?php
       
}
mysqli_free_result($resultado);
mysqli_close($conexion);



