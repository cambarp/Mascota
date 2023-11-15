
<?php

require_once __DIR__ ."/conexion.php";
require_once __DIR__ . "/../model/user.model.php";



class usercontroller extends Connection{
    
    public function create( $nombre,$nombreuser,$correo,$contraseña) 

    {   
       
        
        $conect= $this->connect(); 
        
        $sql = "INSERT INTO user(nombre,username,email,password) VALUES ( '$nombre','$nombreuser','$correo','$contraseña')" ;
        
        $user = new User();
        $user->nombre = $nombre;
        $user->username = $nombreuser;
        $user->email = $correo;
        $user->password = $contraseña;

        if ($conect->query($sql)) {
             
            $mensaje_alerta = "Usuario creado correctamente";
                echo '<script>alert("' . $mensaje_alerta . '");</script>';

        } else {
            $mensaje = "error Usuario no creado";
            echo '<script>alert("' . $mensaje. '");</script>';
        }
       
        $conect->close();
        echo '<script>setTimeout(function(){ window.location = "login.php"; }, 1000);</script>';
    }
    public function authenticate($nombreuser, $contraseña) {
        $conect = $this->connect();
    
        $nombreuser = $conect->real_escape_string($nombreuser);
        $contraseña = $conect->real_escape_string($contraseña);
    
        $sql = "SELECT * FROM user WHERE username = '$nombreuser' AND password = '$contraseña'";
        $result = $conect->query($sql);
    
        if ($result->num_rows === 1) {
           
            return true;
        } else {
            
            return false;
        }
    
        $conect->close();
        
    }



    public  function read(){
        $conect = $this->connect();

        $sql = "SELECT * FROM user";
        $resultado = $conect->query($sql);
        $usuarios=[];

        $i=0;
        while ($row = $resultado->fetch_assoc()) {
                $usuarios[$i]=$row;
                $i++;
            }
        return $usuarios;

        $conect->close();

    }
    
    
    
}

?>