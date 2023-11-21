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
    <title>Lista de Mascotas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .botones {
            display: flex;
            justify-content: space-between;
        }

        .editar, .eliminar {
            padding: 5px 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
        }

        .eliminar {
            background-color: #f44336;
        }
    </style>
</head>
<body>


<table>
    <tr>
        <th>Nombre</th>
        <th>Tipo de Mascota</th>
        <th>Raza</th>
        <th>Fecha de Nacimiento</th>
        <th>Acciones</th>
    </tr>
    
    <?php
    // Iterar sobre los resultados y agregar filas a la tabla
            foreach ($mascotas as $mascota) {
                echo '<tr>';
                echo '<td>' . $mascota['NombreMascota'] . '</td>';
                echo '<td>' . $mascota['TipoMascotaNombre'] . '</td>';  // Corregido
                echo '<td>' . $mascota['NombreRaza'] . '</td>';         // Corregido
                echo '<td>' . $mascota['FechaNacimiento'] . '</td>';
                echo '<td class="botones">';
                echo '<button class="editar">Editar</button>';
                echo '<button class="eliminar">Eliminar</button>';
                echo '</td>';
                echo '</tr>';
            }
    
        
    ?>
</table>

    <!-- Fin del ejemplo -->
</table>

</body>
</html>

