<?php
 $nombre="";
 $nombreuser="";
 $correo="";
 $contraseña="";
 $numColumnas=0;
 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <div class="imag"> </div>
    <div class="login" >
        <div class="login__logo">
            <img class="logo__imag" src="interfaz_Mascota\logo-removebg-preview (1).png" alt="">
        </div>
    <form action="" method="POST" class="login__form">
        <div class="grupo">
                <input type="text" name="nombre" placeholder=" " id="nombre" class="login__input">
                <label for="nombre"  class="login__label">Nombre</label>
            </div>
            <div class="grupo">
                <input  type="text" name="nombreuser" id="usuario" placeholder=" " class="login__input">
                <label for="usuario"  class="login__label">Nombre de Usuario</label>
            </div>
            <div class="grupo">
                <input type="email" name="correo" placeholder=" " id="correo" class="login__input">
                <label for="correo"  class="login__label">Correo</label>
            </div>
            <div class="grupo">
                <input type="password" name="contraseña" placeholder=" " id="contraseña"  class="login__input">
                <label for="contraseña"   class="login__label">Contraseña</label>
            </div>
            <div class="grupo">
                <input type="text" name="rol" placeholder=" " id="rol"  class="login__input">
                <label for="rol"   class="login__label">Rol</label>
            </div>
            <input class="Registrar" type="submit" name="Registrar" value="Registrar">
            
    </form>
    </div>

    
    <style>
        body{
            
            display:flex;
            background-color: #FBEEE6 ;
            
        }
        .login{
            margin:auto;
            width: 25vw;
            border-radius:10px ;
            height: 40vw;
            max-width: 600px;
            padding:0.4vw 4vw;
            text-align:center;
            box-shadow: 9px 8px 10px rgba(128, 128, 128, 0.5);
            background: ;
           
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
            color: black;
        }
        .login__input{
            position: relative;
            width: 100%;
            background: none;
            border: none;
            color: #706c6c;
            padding: .6em .1em;
            font-size: 1rem;
            outline: none;
            border-bottom: 1px solid #706c6c;
                }
        .imag{
            margin-top:4.5vw;
            width: 40%;
            background-image:url("interfaz_Mascota/fon-removebg-preview.png");
            padding: 1.5vw 1vw ;
            background-repeat:no-repeat;
            background-size:contain;
            object-fit:cover;
            height:21vw;
            box-shadow: 0px 2px  3px rgba(128, 128, 128, 0.5); 
        }
        .login__logo{
            margin:auto;
            width: 12vw;
            height:10vw;
            
        }
        .logo__imag{
            width: 100%;
            height:100%
        }
        .Registrar{
            margin-top:1.2vw;
            padding:1.3vw 3.5vw;
            border:none;
            border-radius:1.4vw;
            cursor:pointer;
            background:white;
        }
        
    </style>
</body>
</html>

