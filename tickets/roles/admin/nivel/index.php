<!doctype html>
<html lang="en">

<head>
  <title>Sistema de tickets nivel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

<body>
  <header>
    <!-- place navbar here -->
    <?php include ("../../../includes/header_admin.php");?>
  </header>

  <main>
  <div class="container h-100" style="padding-top: 1rem;" >  
        <div class="row justify-content-center align-item-center h-100">
                <div class="col-9">
                <div class="card bg-primary">
                <div class="card-body">
        <center><h2>Sistema de Tickets</h2> <h4>Nivel</h4></center>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <div class="container h-100" style="padding-top: 5rem;"  > 
        <div class="row justify-content-center align-item-center h-100">
            <div class="cal-12 col-sm-12 col-md-3 mb-3 ">
            <div class="card border-primary">
                <div class="card-body">
                    <form action="./functions/insert.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Nombre Nivel</label>
                        <input name="nombre" type="text" class="form-control border-primary">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cal-12 col-sm-12 col-md-6">
    <div class="card border-primary ">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table ">

<thead>
    <tr>
        <th scope="col">núm.</th>
        <th scope="col">Nombres de Niveles</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
</thead>

    <tbody>
    <?php
    require("../../../includes/db.php");
    $query = "SELECT * FROM nivel";
    $ejecutar = mysqli_query($connection, $query);
    $contador = 1;
    while ($fila = mysqli_fetch_array($ejecutar)){?>

    <tr>
        <td><?php echo $contador;?></td>
        <td><?php echo $fila['nombre_nivel'];?></td>
        <td><a href="./view/update_form.php?id=<?php echo $fila['id_nivel'];?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
        <td><a href="./functions/delete.php?id=<?php echo $fila['id_nivel'];?>"><i class="bi bi-trash text-danger"></i></a></td>
    </tr>
        <?php $contador++;}?>
    </div>
</tbody>
</table>
</div>
</div>
</div>    
</div>
</div>
</div>
  </main>

  <footer>
    <!-- place footer here -->
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>