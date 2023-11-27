<?php
   
   
require_once(__DIR__ . '/../controller/user.controller.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Registrar'])) {
        if (isset($_POST["nombre"]) && isset($_POST["nombreuser"]) && isset($_POST["correo"]) && isset($_POST["contraseña"])) {
            $nombre = $_POST["nombre"];
            $nombreuser = $_POST["nombreuser"];
            $correo = $_POST["correo"];
            $contraseña =$_POST["contraseña"] ;
            $longitudMinima = 6;
            $longitudMaxima = 8;
            $errores = [];
            $errores = []; 

            if (empty($_POST["nombre"])) {
                $errores[] = "El campo 'Nombre' es obligatorio";
            }
        
            if (empty($_POST["nombreuser"])) {
                $errores[] = "El campo 'Nombre de Usuario' es obligatorio";
            }
        
            if (empty($_POST["correo"])) {
                $errores[] = "El campo 'Correo' es obligatorio";
            }
        
            if (empty($_POST["contraseña"])) {
                $errores[] = "El campo 'Contraseña' es obligatorio";
            }
            if (!empty($errores)) {
                
                }


            if (strlen($contraseña) < $longitudMinima) {
                $errores[] = "La contraseña debe tener al menos $longitudMinima caracteres.";
            }

            if (strlen($contraseña) > $longitudMaxima) {
                $errores[] = "La contraseña no puede tener más de $longitudMaxima caracteres.";
            }

            if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $contraseña)) {
                $errores[] = "La contraseña debe contener al menos 1 carácter especial.";
            }

            if (!preg_match('/[0-9]/', $contraseña)) {
                $errores[] = "La contraseña debe contener al menos 1 número.";
            }

            if (!preg_match('/[A-Z]/', $contraseña)) {
                $errores[] = "La contraseña debe contener al menos 1 letra mayúscula.";
            }

            if (!preg_match('/[a-z]/', $contraseña)) {
                $errores[] = "La contraseña debe contener al menos 1 letra minúscula.";
            }

            $gruposRequeridos = 2;
            $contGrupos = 0;

            if (preg_match('/[!@#$%^&*(),.?":{}|<>]/', $contraseña)) {
                $contGrupos++;
            }
            if (preg_match('/[0-9]/', $contraseña)) {
                $contGrupos++;
            }
            if (preg_match('/[A-Z]/', $contraseña)) {
                $contGrupos++;
            }
            
        
                if (preg_match('/[a-z]/', $contraseña)) {
                    $contGrupos++;
                }
    
                if ($contGrupos < $gruposRequeridos) {
                    $errores[] = "La contraseña debe contener al menos $gruposRequeridos de los cuatro grupos: Especiales, número, mayúsculas, minúsculas.";
                }
    
                if (preg_match('/(\w)\1/', $contraseña)) {
                    $errores[] = "La contraseña no puede contener secuencias o caracteres repetidos.";
                }
    
                
            
                if (preg_match('/\s/', $contraseña)) {
                        $errores[] = "La contraseña no puede contener espacios en blanco.";
                    }
        
                    if (!empty($errores)) {
                        
                    } else {
                        $controlar = new usercontroller();
                        $controlar->create($nombre, $nombreuser, $correo, $contraseña);
                        
                    }
                }
            }

            elseif(isset($_POST['IniciarSesion'])) {
                $nombreuser = $_POST['nombreuser'];
                $contraseña = $_POST['contraseña'];
            
                $controller = new usercontroller();
            
                if ($controller->authenticate($nombreuser, $contraseña)) {
                    $mensaje_alerta = "!Bienvendo/a :";
                    echo '<script>alert("' . $mensaje_alerta . $nombreuser.'");</script>';
                    echo '<script> setTimeout(function() { window.location = "mascota.php"; }, 1000);</script>';
                } else {
                    $mensaje = "error nombre o contraseña de usuarios son incorrectos";
                    echo '<script>alert("' . $mensaje. '");</script>';
                }
                
            }
        }
    
?>