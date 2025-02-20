<?php
    include("includes/classes/Account.php");

    $account = new Account();

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermonia</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Accede a tu cuenta</h2>
            <p>
                <label for="loginUsername">Usuario</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="Usuario" required>
            </p>
            <p>
                <label for="loginPassword">Contraseña</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Contraseña" required>
            </p>   

            <button type="submit" name="loginButton">ENTRAR</button>
        </form>


        <form id="registerForm" action="register.php" method="POST">
            <h2>Crea una cuenta!</h2>
            <p>
                <label for="username">Usuario</label>
                <input id="username" name="username" type="text" placeholder="Usuario" required>
            </p>

            <p>
                <label for="firstName">First Nombre</label>
                <input id="firstName" name="firstName" type="text" placeholder="Axel" required>
            </p>

            <p>
                <label for="LastName">Last Nombre</label>
                <input id="LastName" name="LastName" type="text" placeholder="Tapia" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="axeltapia@gmail.com" required>
            </p>

            <p>
                <label for="email2">Confirma tu Email</label>
                <input id="email2" name="email2" type="email" placeholder="axeltapia@gmail.com" required>
            </p>

            <p>
                <label for="password">Contraseña</label>
                <input id="password" name="password" type="password" placeholder="Tu Contraseña" required>
            </p>  

            <p>
                <label for="password2">Confirma tu Contraseña</label>
                <input id="password2" name="password2" type="password" placeholder="Tu Contraseña" required>
            </p>   

            <button type="submit" name="registerButton">REGISTRATE</button>
        </form>

    </div>
</body>
</html>