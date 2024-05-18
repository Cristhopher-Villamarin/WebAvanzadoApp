<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="../css/encabezados.css">

    <style>
        /* Agrega tus estilos CSS aquí */
        body {
            font-family: 'Raleway', sans-serif;
            background-image: url(img/fondodifuminado.jpg);
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        .ficha-container {
            background-color: #fff;
            border: 1px solid #ddd;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            
            padding: 8px;
            text-align: left;
        }

        th {
            background: #A3BFAF;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        span.error {
            color: red;
        }

        header {
            display: flex;
            align-items: center;
            background-color:#353437;
            font-family: 'Raleway', sans-serif;
            height: 85px;
            width: 100%;
            position: fixed;
            top: 0;
        }

        .logo {
            margin-left: 15px;
        }

    
        .elementosNav {
            margin-left: auto;
        }

        .elementosNav a {
            padding: 20px 20px;
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-size: 19px;
            transition: 1s;
        }

        .elementosNav a:hover {
            background-color: #a39b7e;
            transition: 1s ease-in;
        }


    
    </style>
</head>
<body>
<header>
            <section class="logo">
                <a href="#">
                    <img src="img/logoblanco.png" alt="LOGO INMOBILIARIA" style="width: 200px; height: auto;" >
                </a>
            </section>           
            <nav class="elementosNav">
                <a href="principal.html">Inicio</a>
                <a href="catalogo.html">Productos</a>
                <a href="contacto.html">Contáctanos</a>
                <a href="ofertas.html">Ofertas</a>

               
            </nav>
    </header>
<img src="img/esloganblanco.png" alt="" width="250px" height="auto">
    <section class="ficha-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $fecha_nacimiento = $_POST["fecha_nacimiento"];
            $genero = $_POST["genero"];
            $mensaje = $_POST["mensaje"];

            // Calcula la edad
            $fecha_nacimiento_obj = new DateTime($fecha_nacimiento);
            $fecha_actual = new DateTime();
            $edad = $fecha_actual->diff($fecha_nacimiento_obj)->y;
        

            echo "<h2>Ficha de Usuario</h2>";
            echo "<table>";
            echo "<tr><th>Campo</th><th>Valor</th></tr>";
            echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
            echo "<tr><td>Apellido</td><td>$apellido</td></tr>";
            echo "<tr><td>Dirección</td><td>$direccion</td></tr>";
            echo "<tr><td>Teléfono</td><td>$telefono</td></tr>";
            echo "<tr><td>Fecha de Nacimiento</td><td>$fecha_nacimiento (Edad: $edad años)</td></tr>";
    
            echo "<tr><td>Genero</td><td>$genero</td></tr>";
            echo "<tr><td>Mensaje</td><td>$mensaje</td></tr>";


            echo "</table>";
        }
        ?>
    </section>

    
</body>
</html>
