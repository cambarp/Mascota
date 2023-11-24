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
<link rel="stylesheet" href="css/mascota.css">
<title> Datos de la  Mascota</title>
</head>
<body>
    <div class="conte-general">

            <div class="general__imagen">
                <img class="imagen__img" src="interfaz_Mascota/perro-fondo-removebg-preview.png" alt="">
            </div>
            <div class="general__formulario">
                <form  action="" class="formulario" method="POST">
                    <label for="nombre">Nombre de la Mascota:</label>
                    <input type="text" id="nombre" name="nombre_r" required>
                    <label for="nombre">Tipo de Mascota:</label>
                    <input type="text" id="nombre" name="nombre_tipo" required>
                    <label for="nombre">Raza de la mascota:</label>
                    <input type="text" id="nombre" name="Raza_mascota" required>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
                    
                    
                    <button type="submit" name="guardar" class="btn_guardar" >guardar</button>
                </form>
            </div>

    </div>
    

</body>
</html>
