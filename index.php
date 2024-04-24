<?php

include_once "connection.php";
// include_once "colores.php";

$estado = ["urgente" => "blue", "pendiente" => "red", "ejecucion" => "orange", "finalizada" => "green"];

$select = "SELECT * FROM tareas";

$select_prepare = $conn->prepare($select);
$select_prepare->execute();

$resultado_select = $select_prepare->fetch();

// print_r($resultado_select);

// foreach ($resultado_select as $key => $value) {
//     echo $value["color"]. "<br>";
// }

// 

?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertar nueva tarea</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1 class="text-center">Gestor de tareas</h1>
    </header>

    <main class="container my-5">
        <h2 class="text-center">Insertar nueva tarea</h2>
        <form action="" method="GET">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado :</label>
                <select name="estado" id="estado">
                    <option value="urgente" selected>Urgente</option>
                    <option value="pendiente">Pendiente</option>
                    <option value="ejecucion">Ejecución</option>
                    <option value="finalizada">Finalizada</option>

                </select>
            </div>

            <button type="submit" name="insertar" class="btn btn-primary">Crear tarea</button>



    </main>

</body>

</html>