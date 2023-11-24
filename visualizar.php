<?php
require_once __DIR__ ."/./controller/conexion.php";
require_once __DIR__. "/vendor/autoload.php";

    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
require_once __DIR__ . "/./controller/mascota.controller.php";
$mascotas= new MascotaController();
$mascotas=$mascotas->read();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200&family=Dosis:wght@200&family=Playfair+Display:ital,wght@1,400;1,500&family=Quicksand&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/visualizar.css">
<title>Mascotas</title>
</head>
<body>
<div class="fondo">

    <div class="image">
        
    </div>
    <div class="tabla">
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo de Mascota</th>
            <th>Raza</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
        </tr>
        
        <?php
        
                foreach ($mascotas as $mascota) {
                    echo '<tr>';
                    echo '<td>' . $mascota['id'] . '</td>';
                    echo '<td>' . $mascota['NombreMascota'] . '</td>';
                    echo '<td>' . $mascota['TipoMascotaNombre'] . '</td>';  
                    echo '<td>' . $mascota['NombreRaza'] . '</td>';         
                    echo '<td>' . $mascota['FechaNacimiento'] . '</td>';
                    echo '<td class="botones">';
                    echo '<a class="editar" href="editar.php?id='. $mascota['id'] .'">editar</a>';
                    echo '<a class="eliminar" href="eliminar.php?id='. $mascota['id'] .'">eliminar</a>';
                    echo '</td>';
                    echo '</tr>';
                }
        
            
        ?>
    </table>
    </div>

</div>


</body>
</html>

