<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url(img/mueblefondo.jpg);
            background-size: cover;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0 20px;
        }

        .login-form {
            width: 400px;
            background: #353437;
            align-items: center;
            justify-content: center;
            padding: 30px;
            border-radius: 4px;
            font-family: 'calibri';
            color: white;
            box-shadow: 7px 13px 37px #000;
            font-family: 'Raleway', sans-serif;
            margin-left: 10px;
        }

        .login-form label {
            display: block;
            margin-bottom: 10px;
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #53576b;
            border-radius: 4px;
            font-family: 'calibri';
            font-size: 18px;
            color: rgb(0, 0, 0);
            font-family: 'Raleway', sans-serif;
        }

        .login-form h4 {
            text-align: center;
            margin: 15px;
        }

        .login-form .login-button {
            width: 100%;
            background: #e2c99f;
            border: none;
            align-items: center;
            justify-content: center;
            padding: 12px;
            color: black;
            margin: 16px 0;
            font-size: 16px;
        }

        .login-form .register-button {
            display: block;
    width: 100%;
    text-align: center; /* Alinea el texto dentro del botón */
    background: #a39b7e;
    border: none;
    padding: 12px;
    color: white;
    margin: 16px 0;
    font-size: 16px;
    text-decoration: none;
    border-radius: 4px; 
        }

        .login-form .error-message {
            color: red; 
            margin-bottom: 10px;
            text-align: center;
}


    </style>

</head>



<body>
    <section class="form-container">
        <section class="imagenContacto">
            <img src="img/logoblanco.png" alt="" style="filter: invert(1);">
        </section>
        <form action="php/logininfo.php" method="POST" class="login-form">
    <h4>Iniciar sesión</h4>
   
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" class="controls" placeholder="Ingresa tu usuario" required>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" class="controls" placeholder="Ingresa tu contraseña" required>
    <input type="submit" value="Login" class="login-button">
    <a href="php/register.php" class="register-button">Registrarse</a>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "incorrecto") {
            echo "<p class='error-message'>El usuario o la contraseña no son correctos</p>";
        }
        if ($error == "vacio") {
            echo "<p class='error-message'>Los datos se encuentran vacíos</p>";
        }
    }
    ?>


  

</form>

    </section>
</body>

</html>