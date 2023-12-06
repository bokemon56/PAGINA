<?php
$usuario_admin = "administrador";  
$clave_admin = "12345";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];

    if ($usuario === $usuario_admin && $clave === $clave_admin) {
        echo "Inicio de sesión exitoso. Bienvenido, $usuario.";  
    } else {
        echo "Inicio de sesión fallido. Verifica tu usuario y contraseña.";
    }
}
?>