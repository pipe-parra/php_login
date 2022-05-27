<?php

$usuario= $_POST['usuario'];
$contraseña= $_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

include('bd.php');
// $conexion=mysqli_connect("localhost", "root", "1234", "bdprint");

$consulta="SELECT*FROM trabajador where usuario='$usuario' and clave='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">USUARIO NO EXISTE</h1>
    <a href="login.php">Volver</a>
    <?php
       
}
mysqli_free_result($resultado);
mysqli_close($conexion);

