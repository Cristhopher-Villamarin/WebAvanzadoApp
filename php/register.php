<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url(../img/mueblefondo.jpg);
            background-size: cover;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0 20px;
        }

        .register-form {
            width: 400px;
            background: #353437;
            padding: 30px;
            border-radius: 4px;
            font-family: 'calibri';
            color: white;
            box-shadow: 7px 13px 37px #000;
            font-family: 'Raleway', sans-serif;
            margin-left: 10px;
        }

        .register-form label {
            display: block;
            margin-bottom: 10px;
        }

        .register-form input {
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

        .register-form h4 {
            text-align: center;
            margin: 15px;
        }

        .register-form .register-button {
            width: 100%;
            background: #a39b7e;
            border: none;
            padding: 12px;
            color: white;
            margin: 16px 0;
            font-size: 16px;
            text-decoration: none;
        }

        .register-form .error-message {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <section class="form-container">
        <section class="imagenContacto">
            <img src="../img/logoblanco.png" alt="" style="filter: invert(1);">
        </section>
        <form action="php/registerinfo.php" method="POST" class="register-form">
            <h4>Registro de Usuario</h4>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="controls" placeholder="Ingresa tu usuario" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="controls" placeholder="Ingresa tu correo electrónico" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="controls" placeholder="Ingresa tu contraseña" required>

           <!-- Campo de fecha de nacimiento -->
           <label for="birthdate">Fecha de Nacimiento:</label>
            <input type="text" name="birthdate" id="birthdate" class="controls" placeholder="Selecciona tu fecha de nacimiento" required>
            <button type="button" onclick="showCalendar()">Seleccionar Fecha</button>
            <a href="../html/principal.html" class="register-button" style="display: block; text-align: center;">Registrarse</a>

            <?php
            if (isset($_GET['error'])) {
                $error = $_GET['error'];
                if ($error == "existing_user") {
                    echo "<p class='error-message'>El usuario ya existe. Por favor, elige otro nombre de usuario.</p>";
                }
                if ($error == "vacio") {
                    echo "<p class='error-message'>Por favor, completa todos los campos.</p>";
                }
            }
            ?>
        </form>
    </section>

    <script>
        function setFecha(sFechaSel) {
            document.getElementById("birthdate").value = sFechaSel;
        }

        function showCalendar() {
            // Abre el calendario en una nueva ventana
            var screenWidth = screen.width;
            var screenHeight = screen.height;
            var windowWidth = 300; // Ancho de la ventana del calendario
            var windowHeight = 300; // Alto de la ventana del calendario

            var left = (screenWidth - windowWidth) / 2;
            var top = (screenHeight - windowHeight) / 2;

            // Abre el calendario en una nueva ventana
            window.open("../html/calendario.html", "Calendario", "width=300,height=300,left=" + left + ",top=" + top);
        }
    </script>
    
</body>

</html>
