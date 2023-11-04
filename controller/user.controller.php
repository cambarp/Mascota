<?php
require_once __DIR__ ."/conexion.php";

class usercontroller extends Connection{
    
    public function create($nombre,$nombreuser,$correo,$contraseña)

    {   

        
        $conect= $this->connect(); 
        
        $sql = "INSERT INTO user (id ,nombre,username,email,password) VALUES ('$nombre','$nombreuser','$correo','$contraseña')" ;
        
        
        if ($conect->query($sql)) {
             
            $mensaje_alerta = "se registro correctamente";
                echo '<script>alert("' . $mensaje_alerta . '");</script>';
        } else {
            $mensaje = "error al registrar";

                echo '<script>alert("' . $mensaje. '");</script>';
        }
       
        $conect->close();
    }

    
}


?>