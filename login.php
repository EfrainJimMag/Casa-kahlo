<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <form action="log_in.php" method="POST">
            <div class="inputBox">
                <input type="text" name="usuario" required ="">
                <label>usuario</label>
            </div>
            <div class="inputBox">
                <input type="password" name="contraseña" required = "">
                <label>contraseña</label>
            </div>
            
            <input type="submit" name="" value="Send">

            <div class="log">
                <a href="registro.php">No tengo una cuenta</a>
            </div>
            
        </form>

    </div>
</body>