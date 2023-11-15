
<?php 

    require_once __DIR__. "/vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__) ;
    $dotenv->load();
    
    require_once __DIR__ ."/controller/user.controller.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="login">
    <div class="login__logo">
            <img class="logo__imag" src="interfaz_Mascota\logo-removebg-preview (1).png" alt="">
        </div>
    <form action="" method="POST" class="formulario">
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
    <p>aun no tienes cuenta <a class="enlace" href="login.php">ingresa aqui</a></p>
    </div>
    

    <style>

        body{
            height:100vh;
            display:flex;
            background:url("interfaz_Mascota/gato.jpeg");
            background-repeat:no-repeat;
            background-size:cover;
            
        }

        .login{
                    margin:auto;
                    width: 25vw;
                    border-radius:10px ;
                    height: 32vw;
                    max-width: 600px;
                    padding:1.5vw 3.2vw;
                    background:rgba(2, 12,7,.20);
                    text-align:center;
                    box-shadow: 9px 8px 15px rgba(128, 128, 128, 0.5);
                    background:white ;
                
                }

        .grupo{
            position: relative;
            color: white;
            padding-bottom:1.2vw;
    
        }

        .login__label{
                font-family: 'Source Serif Pro', serif;
                color:black;
                cursor: pointer;
                position:absolute;
                top: 0;
                left: 5px;
                transform: translateY(10px);
                transition: transform .5s ,color.3s;
                font-size: 1.1em;
        }
        .login__input:focus + .login__label,
        .login__input:not(:placeholder-shown)+.login__label{
            transform: translateY(-12px) ;
            transform-origin: left top;
            color: #3d8544;
        }
        .login__input{
            position: relative;
            width: 100%;
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
        .enlace{
            color:#3d8544;
            text-decoration:none;
        }


                
    </style>
</body>
</html>





