<?php
 $nombre="";
 $nombreuser="";
 $correo="";
 $contraseña="";

 require_once __DIR__. "/vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__) ;
    $dotenv->load();

require_once(__DIR__ . '/controller/user.controller.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Registrar'])) {
        // Código del primer formulario
        
       
if (isset($_POST["nombre"]) && isset($_POST["nombreuser"]) && isset($_POST["correo"]) && isset($_POST["contraseña"])) {
            $nombre = $_POST["nombre"];
            $nombreuser = $_POST["nombreuser"];
            $correo = $_POST["correo"];
            $contraseña = $_POST["contraseña"];
            
            $controlar = new usercontroller();
            $controlar->create($nombre, $nombreuser, $correo, $contraseña);
        }
    } elseif (isset($_POST['IniciarSesion'])) {
        // Código del segundo formulario
        $nombreuser = $_POST['nombreuser'];
        $contraseña = $_POST['contraseña'];
    
        $controller = new usercontroller();
    
        if ($controller->authenticate($nombreuser, $contraseña)) {
            echo "Autenticación exitosa. Bienvenido, $nombreuser!";
            echo '<script>setTimeout(function(){ window.location = "Read.php"; }, 1000);</script>';
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200&family=Dosis:wght@200&family=Playfair+Display:ital,wght@1,400;1,500&family=Quicksand&display=swap" rel="stylesheet">

<title>Registro</title>
</head>
<body>
    <div class="general">

        <div class="general__atras">
            <div class="atras__iniciar">
                <h2>¿Ya tienes cuenta?</h2>
                <p>Inicia sesion para ingresar</p>
                <button id="iniciar">iniciar</button>
            </div>
            <div class="atras__registrar">
                <h2>¿Aun no tienes cuenta?</h2>
                <p>ingresa para registrarte </p>
                <button id="registrar">registrar</button>
            </div>
        </div>
        <div class="general__formularios">

                <form action="" method="POST" class="login__form">
                        <div class="grupo">
                            <input type="text" autocomplete="off" name="nombre" placeholder=" " id="nombre" class="login__input">
                            <label for="nombre"  class="login__label">Nombre</label>
                        </div>
                        <div class="grupo">
                            <input  type="text" autocomplete="off" name="nombreuser" id="usuario" placeholder=" " class="login__input">
                            <label for="usuario"  class="login__label">Nombre de Usuario</label>
                        </div>
                        <div class="grupo">
                            <input type="email" autocomplete="off" name="correo" placeholder=" " id="correo" class="login__input">
                            <label for="correo"  class="login__label">Correo</label>
                        </div>
                        <div class="grupo">
                            <input type="password" autocomplete="off" name="contraseña" placeholder=" " id="contraseña"  class="login__input">
                            <label for="contraseña"   class="login__label">Contraseña</label>
                        </div>

                        <input  class="Registrar" ubi type="submit" name="Registrar" value="Registrar">
                        
                </form>

                <form action="" method="POST" class="login__ingresar" >
                    
                    <div class="grupo">
                        <input  type="text" name="nombreuser" id="usuario" autocomplete="off" placeholder=" " class="login__input" required>
                        <label for="usuario"  class="login__label">Nombre de Usuario</label>
                    </div>
                    <div class="grupo">
                        <input type="password" autocomplete="off" name="contraseña" placeholder=" " id="contraseña"  class="login__input" required>
                        <label for="contraseña"   class="login__label">Contraseña</label>
                    </div>
                    <input class="Registrar" type="submit" name="Registrar" value="ingresar"></a> 
                </form>


        </div>

    </div>
    
    <script src="js\login.js"></script>
    

</body>
</html>

