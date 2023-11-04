<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,400;1,500&display=swap" rel="stylesheet">
    <title>404 error</title>
    
    
</head>
<body>
    <div class="error">
        <div class="error__imag">
            <div class="imag__home">
                <img class="home" src="imag\homero_dos_preview_rev_1.png" alt="">
            </div>
            <div class="imag__404">
                <img class="image"  src="imag\nuevo_preview_rev_1.png" alt="">
            </div>
        </div>
        <div class="error__parra">
            <h2 class="parra__err" >Error</h2>  
            <p class="parra__p">La direccion de la url no 
                se ha encontrado
            </p>  

        </div>
    </div>
    <style>
        body{
            height:100vh;
            font-family: 'Playfair Display', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background:#F8F9F9 ;
            
        }
        .error{
           margin:auto;
           
        }
        .error__imag{
            display: flex;
        }
        .imag__404{
            width: 20vw;
            padding: 1vw 0vw;
            border-radius:12px;
        }
        .imag__home{
            padding: 6vw 0vw;
        }
        .home{
            height: 17vw;
            width: 10vw;
        }
        .image{
            height: 29vw;  
        }
        .error__parra{
            text-align:center;
        }
        .parra__err{
            font-size:2.4vw;
        }
        .parra__p{
            font-size:1.8vw;
        }
        
    </style>
    
</body>
</html>