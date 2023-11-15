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
                if (isset($_POST["nombre"]) && isset($_POST["nombreuser"]) && isset($_POST["correo"]) && isset($_POST["contraseña"])) {
                        $nombre = $_POST["nombre"];
                        $nombreuser = $_POST["nombreuser"];
                        $correo = $_POST["correo"];
                        $contraseña = $_POST["contraseña"];
                                    
                        $controlar = new usercontroller();
                        $controlar->create($nombre, $nombreuser, $correo, $contraseña);
                                }
            }elseif(isset($_POST['IniciarSesion'])) {
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
    <html lang="en">
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
                        
                    <img src="interfaz_Mascota\logo-removebg-preview (1).png" class="logo" alt="">
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

                            <input  class="Registrar"  type="submit" name="Registrar" value="Registrar">
                            
                    </form>

                    <form action="" method="POST" class="login__ingresar" >
                    <img src="interfaz_Mascota\logo-removebg-preview (1).png" class="logo" alt="">
                        
                        <div class="grupo">
                            <input  type="text" name="nombreuser" id="usuario" autocomplete="off" placeholder=" " class="login__input" required>
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
        <style>
            *{
            margin: auto;
            padding: 0;
            box-sizing: border-box;

            }
            body{      
                background:#F4F6F6;
                    
                display: flex;
                font-family: 'Bitter' serif;
                font-family: 'Dosis' sans-serif;
                font-family: 'Playfair Display' serif;
                font-family: 'Quicksand' sans-serif;
            }
        
                .general{
                    margin: auto;
                    width: 70%;
                    position: relative;
                    
                }
                .general__atras{
                    display: flex;
                    margin-top: 4.5vw;
                    width: 100%;
                    padding: 6.7vw 1.4vw;
                    justify-content: center;
                
                }
                .logo{
                    width: 13vw;
                    height:10.2vw;
                }
                .general__atras  div {
                    margin: 1.5vw 1.6vw;
                    color: black;
                    transition: all 500ms;
                }
                .general__atras div h2{
                    font-weight: 400;
                    font-size: 2.1vw;
                    margin-top: 1.4vw;
                }
                .general__atras div button{
                    margin-top: 1.4vw;
                    margin-bottom:1.3vw;
                    padding: 0.9vw 2.5vw;
                    background-color: #3d8544;
                    border-radius: 1.5vw;
                    border: none;
                    outline: none;
                    cursor: pointer;
                }
                .general__atras p{
                    font-size: 1.8vw;
                    margin-top: 1vw;
                }
                .general__formularios{
                    background-color:white;
                    
                    display: flex;
                    text-align: center;
                    position: relative;
                    top: -25.4vw;
                    left: 14px;
                }
                .general__formularios form{
                    background-color:white;
                    border-radius:12px ;
                    position: absolute;
                }
                .login__form{
                    width: 32.5vw;
                    padding: 1.4vw 4.3vw;
                    opacity: 1;
                    display:none;
                    top:-2.4vw;
                }
                .login__ingresar{
                    width: 32.5vw;
                    padding: 2.4vw 4.3vw;
                    background-color:#3d8544;
                    display:"block";
                    
                }

                .grupo{
                    position: relative;
                    color: white;
                    padding-bottom:1.2vw;

                }

                .login__label{
                        font-family: 'Source Serif Pro' serif;
                        color:black;
                        cursor: pointer;
                        position:absolute;
                        top: 0;
                        left: 5px;
                        transform: translateY(10px);
                        transition: transform .5s , color.3s;
                        font-size: 1.1em;
                }
                .login__input:focus + .login__label,
                .login__input:not(:placeholder-shown)+.login__label{
                    transform: translateY(-12px) ;
                    transform-origin: left top;
                    color:  black;
                }
                .login__input{
                    position: relative;
                    width:95%;
                    background: none;
                    border: none;
                    color: #3d8544;
                    padding: .6em .1em;
                    font-size: 1rem;
                    outline: none;
                    border-bottom: 1.4px solid #706c6c;
                        }

                .Registrar{
                    margin-top:1.2vw;
                    padding:1.3vw 3.5vw;
                    border:none;
                    border-radius:1.4vw;
                    cursor:pointer;
                    background:#3d8544;
                }
        </style>
        
        <script >
            var general__formularios=document.querySelector('.general__formularios');
            var login__form=document.querySelector('.login__form');
            var login__ingresar=document.querySelector('.login__ingresar');
            var atras__iniciar=document.querySelector('.atras__iniciar');
            var atras__registrar=document.querySelector('.atras__registrar');

            var registrar=document.getElementById('registrar').addEventListener("click",registrar);
            var iniciar=document.getElementById('iniciar').addEventListener("click",iniciar);


            function registrar(){
                login__form.style.display="block";
                login__ingresar.style.display="none";
                general__formularios.style.left="465px";
    
            }
            function iniciar(){
                login__ingresar.style.display="block"
                login__form.style.display="none";
                general__formularios.style.left="12px";
            }


        </script>
        
    </body>
    </html>


