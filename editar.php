<?php
     require_once __DIR__ ."/./controller/mascota.controller.php";
     require_once __DIR__ ."/controller/conexion.php";
    
     require_once __DIR__. "/vendor/autoload.php";

        use Dotenv\Dotenv;
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();


    $actualizar = new Mascotacontroller();
    $actualizar->update($id);
     $id=$_GET['id'];

     foreach ($mostrar as $mostrar) {
        echo '<tr>';
        echo '<td>' . $mostrar['id'] . '</td>';
        echo '<td>' . $mostrar['NombreMascota'] . '</td>';
        echo '<td>' . $mostrar['TipoMascotaNombre'] . '</td>';  
        echo '<td>' . $mostrar['NombreRaza'] . '</td>';         
        echo '<td>' . $mostrar['FechaNacimiento'] . '</td>';
        echo '<td class="botones">';
        echo '<a class="editar" href="editar.php?id='. $mascota['id'] .'">editar</a>';
        echo '<a class="eliminar" href="eliminar.php?id='. $mascota['id'] .'">eliminar</a>';
        echo '</td>';
        echo '</tr>';
    }

    

 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editar.css">
    <title>actualizar</title>
</head>
<body>
    <form action="" class="formulario-actualizar">
        <label for="nombremas"  >NombreMascota</label>
        <input type="text" value="<?php echo $id ?>" id="nombremas" placeholder="nombre">
        <label for="tipomas">TipoMascota</label>
        <input type="text" id="tipomas">
        <label for="razamas">RazaMascota</label>
        <input type="text" id="razamas">
        <label for="fechamas">FechaNacimiento</label>
        <input type="text" id="fechamas">
    </form>
</body>
</html>