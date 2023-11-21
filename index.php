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
<link rel="stylesheet" href="css/index.css">
<title>Inicio</title>
</head>
<body>
    <div class="general">
            <header class="header">
                
                <div class="header__logo">
                    <img class="image__logo" src="interfaz_Mascota\logo-removebg-preview (1).png" alt="">
                </div>

                <div class="header__conctatos">
                    <ul class="conctatos__ul">
                        <li class="ul__li"><a href="#"><i class="fab fa-whatsapp whatsapp"><span class="numero">3127445245</span></i></a></li>
                        <li class="ul__li"><a href="#"> <i class="fas fa-envelope email"><span class="correo">Mpellos@Hotmail.com</span></i></a></li>
                    </ul>
                </div>

            </header>
            <main class="cuerpo">
                <div class="cuerpo__img">
                    <img class="img__perrito" src="interfaz_Mascota\cachorrinho.png" alt="">
                    
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
                        Iniciar
                    </button></a>
                </div>
            </main>

    </div>
    
</body>
</html>