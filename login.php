 <?php 
    require_once __DIR__ . "/./controller/user.controller.php";
    require_once __DIR__ . "/./vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__) ;
    $dotenv->load();
    
    if(isset($_POST['Registrar'])){
        require_once __DIR__ . "/./process/validar.process.php";
    }
    if(isset($_POST['IniciarSesion'])){
        require_once __DIR__ . "/./process/validar.process.php";
    }
    
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200&family=Dosis:wght@200&family=Playfair+Display:ital,wght@1,400;1,500&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
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
            <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errores)) {
                        echo "<ul class='errores'>";
                        foreach ($errores as $error) {
                            echo "<li>$error</li>";
                        }
                        echo "</ul>";
                    }
                ?>
                    <form action="" method="POST" class="login__form">
                        
                            <div class="grupo">
                                <input type="text"  name="nombre" placeholder=" " id="nombre" class="login__input">
                                <label for="nombre"  class="login__label">Nombre</label>
                            </div>
                            <div class="grupo">
                                <input  type="text"  name="nombreuser" id="usuario" placeholder=" " class="login__input">
                                <label for="usuario"  class="login__label">Nombre de Usuario</label>
                            </div>
                            <div class="grupo">
                                <input type="email" name="correo" placeholder=" " id="correo" class="login__input">
                                <label for="correo"  class="login__label">Correo</label>
                            </div>
                            <div class="grupo">
                                <input type="password"  name="contraseña" placeholder=" " id="contraseña"  class="login__input">
                                <label for="contraseña"   class="login__label">Contraseña</label>
                            </div>

                            <input  class="Registrar"  type="submit" name="Registrar" value="Registrar">
                            
                    </form>

                    <form action="" method="POST" class="login__ingresar" >
                    
                        
                        <div class="grupo">
                            <input  type="text" name="nombreuser" id="usuario"  placeholder=" " class="login__input" required>
                            <label for="usuario"  class="login__label">Nombre de Usuario</label>
                        </div>
                        <div class="grupo">
                            <input type="password" autocomplete="off" name="contraseña" placeholder=" " id="contraseña"  class="login__input" required>
                            <label for="contraseña"   class="login__label">Contraseña</label>
                        </div>
                        <input class="Registrar" type="submit" name="IniciarSesion" value="ingresar"></a> 
                    </form>


            </div>

        </div>
        <script src="js/login.js"></script>
        
    </body>
    </html>


