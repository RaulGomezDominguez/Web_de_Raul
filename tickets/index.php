<!doctype html>
<html lang="en">

<head>
    <title>Sistemas de Ticket</title>
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
    <?php include "includes/header.php"?>
    </header>
    <main>
        <div class="container h-100" style="padding-top: 15rem">
            <div class="row justify-content-center align-items-center h-100">
                <div class="cal-12 col-sm-12 col-md-8 mt-5">
                    <h1>Esto es un sistema de Tickets</h1>
                    <p>Es un sistema de gestión de <b>tickets</b> de soporte, los clientes y los agentes pueden: <br>   
                    Esto Realizará un seguimiento del estado general de una solicitud de tickets ya que será una herramienta esencial 
                    que debe tener todo servicios para que sea eficiente.<br>
                    </p>
                    
                </div>
                <div class="cal-12 col-sm-9 col-md-4 mt-5">
                    <div class="card border-primary">
                    <div class="card-body">  
                        <form action="./auth/login.php" method="post">
                            <div class="form-floating mb-4 ">
                            <input type="email" class="form-control border-primary" name="email" placeholder="email" required>
                            <label>Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-4">
                            <input type="password" class="form-control border-primary" name="password"  placeholder="password" required>
                            <label>Contraseña</label> 
                        </div>
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
    <!-- place footer here -->
    <?php include "./includes/footer.php"?>

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