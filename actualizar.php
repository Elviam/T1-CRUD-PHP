<?php
    include("conexion.php");
    $conn = conectar();
    $id = $GET('id');
    $sql = "SELECT * FROM alumnos WHERE cod_estudiante='$id'";
    $query = mysqli_query($conn, $sql);
    $alumno = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP - Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <h1 class="text-center">Proyecto CRUD</h1>
        </div>
        <form action="update.php" method="post">
                <input type="text" 
                       name="cod_estudiante" 
                       hidden>
                <input type="text" 
                       name="ine" 
                       class="form-control mb-3"
                       placeholder="Escribe tu ine">
                <input type="text" 
                       name="nombre" 
                       class="form-control mb-3"
                       placeholder="Escribe tu Nombre">
                <input type="text" 
                       name="apellidos" 
                       class="form-control mb-3"
                       placeholder="Escribe tus Apellidos">
                <input type="submit" 
                       class="btn btn-primary"
                       value="Insertar">
        </form>
    </div>
</body>
</html>