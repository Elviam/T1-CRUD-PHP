<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM alumnos";
    $query = mysqli_query($conn, $sql);
    //echo $query;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresa los Datos del Alumno</h1>
                <form action="insertar.php" method="post">
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

             <div class="col-md-8">
              <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>Código</th>
                        <th>INE</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                            <th>
                                Acciones
                            </th>
                         </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['cod_estudiante'] ?>
                        </td>
                         <td>
                            <?php echo $row['ine'] ?>
                        </td>
                         <td>
                            <?php echo $row['nombre'] ?>
                        </td>
                         <td>
                            <?php echo $row['apellidos'] ?>
                        </td>
                        <td>
                            <a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" 
                            class="btn bnt-warning">Editar</a>
                            |
                            <a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>"
                            class="btn bnt-warning">Borrar</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                   </tbody>    
               </table>
            </div>
        </div>
    </div>
</body>
</html>