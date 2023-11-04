<?php 

    require_once __DIR__. "/vendor/autoload.php";
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    require_once __DIR__ .'/login.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST["nombre"]) && isset($_POST["nombreuser"]) && isset($_POST["correo"]) && isset($_POST["contraseña"])) {
            $nombre = $_POST["nombre"];
            $nombreuser = $_POST["nombreuser"];
            $correo = $_POST["correo"];
            $contraseña = $_POST["contraseña"];
        }
    }
    
    require_once(__DIR__ . '/controller/user.controller.php');
    $controlar=new usercontroller();
    $controlar->create($nombre,$nombreuser,$correo,$contraseña);

    

?>