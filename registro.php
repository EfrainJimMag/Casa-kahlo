<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylereg.css" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
    <div class="box">
        <h2>Registro</h2>
        <form action="regi.php" method="POST">
            <div class="inputBox">
                <input type="text" name="nombre" required ="">
                <label>Nombre</label>
            
            <div class="inputBox">
                <input type="text" name="apellidos" required ="">
                <label>Apellidos</label>
            </div>
            <div class="inputBox">
                <input type="text" name="usuario" required = "">
                <label>Usuario</label>
            </div>
            <div class="inputBox">
                <input type="text" name="email" required = "">
                <label>Correo</label>
            </div>
            <div class="inputBox">
                <input type="password" name="contrasena" required = "">
                <label>Contraseña</label>
            </div>

         
            <input type="submit" name="" value="Registrarse">

            <div class="log">
                <a href="login.php">Ya tengo una cuenta</a>
            </div>
           
  
        </form>
  </div> 
 
</body>
</html>