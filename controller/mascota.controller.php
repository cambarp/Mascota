<?php

require_once __DIR__ ."/conexion.php";
require_once __DIR__ . "/../model/mascota.model .php";
require_once __DIR__ . "/../model/tipomascota.model.php";
require_once __DIR__ . "/../model/raza.model.php";


class MascotaController extends Connection {
        
        public function CrearMascota($nombre_r, $fechaNacimiento, $nombre_tipo, $Raza) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $conect = $this->connect();

        $sql_dos = "INSERT INTO tipomascota(nombre) VALUES (?)";
        $dos = $conect->prepare($sql_dos);
        $dos->bind_param("s", $nombre_tipo);
        if($dos->execute()){
            $idTipoMascota = $conect->insert_id;
            $sql_tres = "INSERT INTO raza(nombre,TipoMascota_id) VALUES (?,?)";
            $tres = $conect->prepare($sql_tres);
            $tres->bind_param("si", $Raza,$idTipoMascota);
        }
        

        $tipomascota = new Tipomascota();
        $tipomascota->nombre = $nombre_tipo;

        

        

        $raza = new Raza();
        $raza->nombre = $Raza;

        if ($dos->execute() && $tres->execute()) {
            $idTipoMascota = $conect->insert_id;
            $idRazaMascota = $conect->insert_id;

            session_start();
            $idu=$_SESSION['User_id'];
            $sqlMascota = "INSERT INTO mascota (nombre, FechaNacimiento, foto,User_id, TipoMascota_id, Raza_id) VALUES (?, ?, null,?, ?, ?)";
            $stmtMascota = $conect->prepare($sqlMascota);
            $stmtMascota->bind_param("ssiii", $nombre_r, $fechaNacimiento, $idu, $idTipoMascota, $idRazaMascota);

            if ($stmtMascota->execute()) {
                echo "Datos insertados correctamente en las tres tablas.";
            } else {
                echo "Error al insertar datos en la tabla mascota: " . $conect->error;
            }

            
            $stmtMascota->close();
        } else {
            // Manejar el error en la inserción de tipomascota o raza
            echo "Error al insertar datos en la tabla tipomascota o raza: " . $conect->error;
        }

        
        $dos->close();
        $tres->close();

        $conect->close();
    }

    public function read() {
        $conect = $this->connect();

        $read = " SELECT mascota.id , mascota.nombre AS NombreMascota, mascota.FechaNacimiento, tipomascota.nombre AS TipoMascotaNombre, raza.nombre AS NombreRaza 
        FROM mascota
        INNER JOIN tipomascota ON mascota.TipoMascota_id = tipomascota.id
        INNER JOIN raza ON mascota.Raza_id = raza.id";
        $resultado = $conect->query($read);
        if ($resultado->num_rows > 0) {
            $mascotas = [];
            while ($row = $resultado->fetch_assoc()) {
                $mascotas[] = $row;
            }
            return $mascotas;
        } else {
            return "No se encontraron mascotas.";
        }
    }

    public function update($id){
        $conect = $this->connect();

        $update="SELECT id,nombre , FechaNacimiento,  TipoMascota_id, Raza_id FROM mascota WHERE id='$id' ";
        $resul = $conect->query($update);
        if ($resul->num_rows > 0) {
            $mostrar = [];
            while ($row = $resul->fetch_assoc()) {
                $mostrar[] = $row;
            }
            return $mostrar;
        } else {
            return "No se encontraron mascotas.";
        }


    }
}


?>