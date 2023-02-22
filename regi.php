<?php

    include 'db.php';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    
    $query = "INSERT INTO users (nombre,apellidos,usuario,correo,contraseña) VALUES ('$nombre','$apellidos','$usuario','$email','$contrasena') ";


    $verificar = mysqli_query($conexion, "SELECT * FROM users WHERE correo ='$email'");

    if(mysqli_num_rows($verificar) > 0){
        echo '
            <script>
            alert("Este correo ya esta registrado");
            window.location = "log.php";
            </script>

        ';
        exit;
    }

    $verificar_user = mysqli_query($conexion, "SELECT * FROM users WHERE usuario ='$usuario'");

    if(mysqli_num_rows($verificar_user) > 0){
        echo '
            <script>
            alert("Este usuario ya esta registrado");
            window.location = "registro.php";
            </script>

        ';
        exit;
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo ' <script>
            alert("Usuario almacenado exitosamente");
            window.location = "log_in.php";
        </script>
        ';
        exit;
    }
?>

