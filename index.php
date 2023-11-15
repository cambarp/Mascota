<?php
require_once __DIR__. "/vendor/autoload.php";
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__) ;
$dotenv->load();

require_once __DIR__ ."/controller/user.controller.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200&family=Dosis:wght@200&family=Playfair+Display:ital,wght@1,400;1,500&family=Quicksand&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <img src="interfaz_Mascota\logo-removebg-preview (1).png" alt="">
        </div>

        <div class="header__conctatos">
            <ul class="conctatos__ul">
                <li class="ul__li"><a href="#"><i class="fab fa-whatsapp whatsapp"></i></a></li>
                <li class="ul__li"><a href="#"> <i class="fas fa-envelope email"></i></a></li>
            </ul>
        </div>
    
    </header>
    <main class="cuerpo">
        <div class="cuerpo__img">
            <img class="img__perrito" src="interfaz_Mascota\cachorrinho.png" alt="">
            <a href="verificar.php"><button class="registrar iniciar">
                iniciar seccion 
            </button></a></a>
        </div>
        <div class="cuerpo__text">
            <p class="text__p">
                Mas para ellos porque son nuestros mejores amigos
            </p>
            <h2 class="text__ti">
                Atencion para ellos del mas alto nivel
            </h2>
            <p>
                nos encantaria poder atender a tu mascota <br>
                Que esperas para hacer tu registro 
               
            </p>

            <a href="login.php"><button class="registrar">
                registrar
            </button></a>
        </div>
    </main>
    

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Bitter', serif;
                font-family: 'Dosis', sans-serif;
                font-family: 'Playfair Display', serif;
                font-family: 'Quicksand', sans-serif;
           
            
        }
        .header{
            display:flex;
            margin:auto;
            justify-content: space-between;
            align-items: center;
            width: 88%;
            height:6.4vw;
            padding:0.1vw 0vw;
        }
        .header__menu{
            display:flex;
            align-items: center;
        }
        .menu__navegacion{
            list-style: none;
            display:flex;
        }
        .navegacion__li{
            margin-right: 9vw;
            justify-content: space-around;
        }
        .navegacion__li  a{
            text-decoration: none;
            font-size: 1.4vw;
            color:#3d8544;
        }
        .header__conctatos{
            display:flex;
            margin-right:6.4vw;
            align-items: center;

        }
        .whatsapp{
            font-size:2.2vw;
            color:#3d8544;
        }
        .email{
            color:#3d8544;
            font-size:2.2vw;
        }
        .ul__li{
            list-style: none;
            display:flex;
            margin-right:4vw;
        }
        .conctatos__ul{
            list-style: none;
            display:flex;
        }
        .cuerpo{
            display:flex;
        }
        .cuerpo__img{
            width: 42vw;
            position: relative;
            height: 35vw;
           
        }
        .img__perrito{
            width: 95%;
            height:98%;
        }
        .cuerpo__text{
            width: 45vw;
            text-align:right;
            padding-top: 5vw;
            height: 34vw;
            
        }
        .cuerpo__text p{
            font-size:1.6vw;
            margin:0.8vw 0vw;
        }
        .cuerpo__text h2{
            font-size:3.5vw;
        }
        .registrar{
            padding: 1.5vw 5.4vw;
            border-radius:1.1vw;
            font-family: 'Bitter', serif;
            font-family: 'Dosis', sans-serif;
            font-family: 'Playfair Display', serif;
            font-family: 'Quicksand', sans-serif;
            background:#3d8544;
            margin-top:1.2vw;
            font-size:1.5vw;
            border:none;
            cursor:pointer;
        }
        .iniciar{
            position:relative;
            top:-6.4vw;
            padding: 1.5vw 2.4vw;
            margin-left:5.2vw;
        }
    </style>
</body>
</html>