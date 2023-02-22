<?php

    session_start();
    include 'db.php';

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $velidar = mysqli_query($conexion, "SELECT * FROM users WHERE usuario='$usuario' and contraseña='$contraseña'");

    if(mysqli_num_rows($velidar) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location:index.php");
        exit;
    }else{
        echo'
            <script>
                alert("Usuario no existe, introduce de nuevo los datos");
                window.location = "login.php";
            </script>
        ';
        exit;
    }
?>