<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//encriptación de la password
$contrasena = hash('sha512', $contrasena); 

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $correo;
    header("location: ../../proyecto/home - copia.php");
    exit();
} else {
    echo '
        <script>
            alert("Este usuario no existe, registrate");
            window.location = "../index.php";
        </script>
    ';
    exit();
}
