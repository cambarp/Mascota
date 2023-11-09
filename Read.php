
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>

<?php
         require_once __DIR__. "/vendor/autoload.php";
         use Dotenv\Dotenv;
         $dotenv = Dotenv::createImmutable(__DIR__) ;
         $dotenv->load();

        require_once __DIR__ ."/controller/user.controller.php";
        

            $controller = new usercontroller();
            $controller ->read();
        ?>
<table class="mostrar" >
    <thead class="mostrar__ca">
        <tr>
            <th class="mostrar__c">
                id

            </th>
            <th class="mostrar__c">Nombre</th>
            <th class="mostrar__c">Username</th>
            <th class="mostrar__c">Email</th>
            <th class="mostrar__c">Password</th>
            <th class="mostrar__c">Editar</th>
            <th class="mostrar__c">Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($controller->read() as $row):?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['nombre'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></td>
            <td><a href="borrar.php?id=<?php echo $row['id'];?>">Borrar</a></td>
        </tr>
        <?php endforeach;?>
    </tbody>    
    
    </table>


    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height:100vh;
            display:flex;
            background-image: url("interfaz_Mascota/dog-owner-and-doctor-shake-hands.png");
            background-size:cover;
            background-repeat:no-repeat;
            font-size: 1.4vw;
            
        }
        .mostrar{
            margin:auto;
            width: 70vw;
            border-radius:1.2vw ;
            height: 8vw;
            max-width: 600px;
            padding:1.1vw 3.2vw;
            background:rgba(2, 12,7,.20);
            text-align:center;
            box-shadow: 9px 8px 15px rgba(128, 128, 128, 0.5);
            background:transparent ; 
               }
        .mostrar__ca{
            margin-left:2vw;
        }
    </style>
    

</body>
</html>