<?php
     require_once __DIR__ . "/./controller/mascota.controller.php";
     require_once __DIR__ . "/controller/conexion.php";
     require_once __DIR__ . "/vendor/autoload.php";
     
     use Dotenv\Dotenv;
     $dotenv = Dotenv::createImmutable(__DIR__);
     $dotenv->load();
     $id=$_GET['id'];
     $Mascota= new MascotaController();
    $mas=$Mascota->read();  
    
    
    foreach ($mas as $mascota) {
        $id=$mascota['id'] ;
        $nombremas=$mascota['NombreMascota'];
        $fechana=$mascota['FechaNacimiento'] ;
         $tipomas=$mascota['TipoMascotaNombre'] ;  
         $nombreraza=$mascota['NombreRaza'] ; 
         
    }

    if(isset($_POST['actualizar'])){
        $nombre = $_POST['nombre'];
        $fecha_na = $_POST['fecha_na'];
        $controller = new MascotaController();
        $update=$controller->update($id, $nombre, $fecha_na);

    }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit.css">
    <title>actualizar</title>
</head>
<body>
    <div class="fondo">
        <div class="formulario">
            <form  method="POST" >
                <label for="nombremas"  >NombreMascota</label>
                <input class="ingresar" type="text" name="nombre"  id="nombremas" >
                <label for="fechamas">FechaNacimiento</label>
                <input class="ingresar" type="date" name="fecha_na"   id="fechamas">
                <input type="submit" class="btn_actuaizar" name="actualizar" value="actualizar" >
            </form>
        </div>
        
    </div>  
    
        

</body>
</html>
