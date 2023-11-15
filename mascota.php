<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Datos de Mascota</title>
</head>
<body>

    <form action="#" class="formulario" method="post">
        <label for="nombre">Nombre de la Mascota:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="tipo">Tipo de Mascota:</label>
        <input type="text" id="tipo" name="tipo" required>
        <label for="edad">Edad Equivalente-Joven:</label>
        <input type="number" id="edad" name="edad" required>
        <label for="edad">Edad Equivalente-Adulto:</label>
        <input type="number" id="edad" name="edad" required>
        <label for="edad">Edad Adulto:</label>
        <input type="number" id="edad" name="edad" required>
        <label for="tipo">Raza:</label>
        <input type="text" id="Raza" name="tipo"  required>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>

        <input type="submit" class="guardar" value="Guardar Datos">
    </form>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

       .formulario input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            outline:none;
            border: none;
            
            padding: .6em .1em;
            font-size: 1rem;
            outline: none;
            border-bottom: 1.4px solid #706c6c;
            
        }
        .guardar{
            outline:none;
            padding: 1.5vw 1vw;
            border :none;
            border-radius:1.2vw;
            background-color:#3d8544;
            color:white;

        }
    </style>

</body>
</html>
