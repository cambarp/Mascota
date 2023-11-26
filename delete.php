<?php

require_once __DIR__ . "/controller/mascota.controller.php";
require_once __DIR__ . "/vendor/autoload.php";
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$id=$_GET['id'];
$Mascota=new MascotaController();
$delemascota=$Mascota->Delete($id);



if ($delemascota == "Registro eliminado con éxito.") {
    echo '<script type="text/javascript">alert("Registro eliminado con éxito.");</script>';
    echo '<script>setTimeout(function(){ window.location = "visualizar.php"; }, 1000);</script>';
    
}

?>

