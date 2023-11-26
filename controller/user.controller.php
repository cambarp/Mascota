
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
            session_start();
            $_SESSION['User_id'] = $conect->insert_id;

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
           $fila=$result->fetch_assoc();
           $User_id=$fila['id'];
           session_start();
        $_SESSION['User_id']=$User_id;
        return true;
            
        } else {
            
            return false;
        }
    
        $conect->close();
        
    }
    public function verifySession() {
        session_start();
        if (!isset($_SESSION['User_id'])) {
            header("Location: login.php");
            exit();
        }
    }
    
    
}

?>