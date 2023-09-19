<?php
//print_r($_GET);
$id = $_GET['id'];

require("../../../../includes/db.php");
$query = "SELECT * FROM estatus WHERE id_estatus = $id";
$ejecutar = mysqli_query($connection, $query);
$fila = mysqli_fetch_array($ejecutar);
//echo $fila['nombre']; echo $fila['email']; echo $fila['telefono'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Actualizaciones</title>
</head>
<body>

<div class="container h-100 " style="padding-top: 1rem;" >  
        <div class="row justify-content-center align-item-center h-100">
                <div class="col-6">
                <div class="card bg-primary">
                <div class="card-body">
        <center><h2>Actualización de Tickets</h2> <h4>Estatus</h4></center>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="container h-100 " style="padding-top: 5rem;" >  
        <div class="row justify-content-center align-item-center h-100">
                <div class="col-6">
                <div class="card border-primary ">
                <div class="card-body">
            <form action="../functions/update.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Nombre Estatus</label>
                        <input name="nombre" value="<?php echo $fila['nombre_estatus'];?>" type="text" class="form-control border-primary ">
                        </div>
                            <input type="hidden" name="id" value="<?php echo $fila['id_estatus'];?>">
                            
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                </form>
                            </div>
                        </div>
        </div>
                    </div>
            </div>
            
</body>
</html>