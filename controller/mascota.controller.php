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

        

        $tipomascota = new Tipomascota();
        $tipomascota->nombre = $nombre_tipo;

        $sql_tres = "INSERT INTO raza(nombre) VALUES (?)";
        $tres = $conect->prepare($sql_tres);
        $tres->bind_param("s", $Raza);

        $raza = new Raza();
        $raza->nombre = $Raza;

        if ($dos->execute() && $tres->execute()) {
            $idTipoMascota = $conect->insert_id;
            $idRazaMascota = $conect->insert_id;

            $sqlMascota = "INSERT INTO mascota (nombre, FechaNacimiento, foto, TipoMascota_id, Raza_id) VALUES (?, ?, null, ?, ?)";
            $stmtMascota = $conect->prepare($sqlMascota);
            $stmtMascota->bind_param("ssii", $nombre_r, $fechaNacimiento, $idTipoMascota, $idRazaMascota);

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

        $read = " SELECT mascota.nombre AS NombreMascota, mascota.FechaNacimiento, tipomascota.nombre AS TipoMascotaNombre, raza.nombre AS NombreRaza 
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
}


?>