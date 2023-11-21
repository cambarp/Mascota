<?php
require_once __DIR__ . "/./controller/mascota.controller.php";
require_once __DIR__. "/vendor/autoload.php";

    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
    
    
        $nombre_r = $_POST["nombre_r"];
        $fechaNacimiento = $_POST["fechaNacimiento"];
        $nombre_tipo = $_POST["nombre_tipo"];
        $Raza = $_POST["Raza_mascota"];
    
        $insertar = new Mascotacontroller();
        $insertar->CrearMascota($nombre_r, $fechaNacimiento,$nombre_tipo,$Raza);
        
        
    }



?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Datos de Mascota</title>
</head>
<body>

    <form  action="" class="formulario" method="POST">
        <label for="nombre">Nombre de la Mascota:</label>
        <input type="text" id="nombre" name="nombre_r" required>
        <label for="nombre">Tipo de Mascota:</label>
        <input type="text" id="nombre" name="nombre_tipo" required>
        <label for="nombre">Raza de la mascota:</label>
        <input type="text" id="nombre" name="Raza_mascota" required>
        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
        

        <input type="submit" name="guardar" class="guardar" value="Guardar">
    </form>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

       .formulario input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            outline:none;
            border: none;
            
            padding: .6em .1em;
            font-size: 1rem;
            outline: none;
            border-bottom: 1.4px solid #706c6c;
            
        }
        .guardar{
            outline:none;
            padding: 1.5vw 1vw;
            border :none;
            border-radius:1.2vw;
            background-color:#3d8544;
            color:white;

        }

        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form{
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    width: 300px;
}

.header {
    background-color: #3498db;
    color: #ffffff;
    text-align: center;
    padding: 20px;
}

.form-group {
    padding: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group input[type="submit"] {
    background-color: #3498db;
    color: #ffffff;
    cursor: pointer;
}

.form-group input[type="submit"]:hover {
    background-color: #2980b9;
}

.forgot-password {
    text-align: center;
    margin-top: 10px;
}

.forgot-password a {
    color: #3498db;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}

    </style>

</body>
</html>
