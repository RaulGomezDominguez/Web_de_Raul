<?php
    //print_r($_POST);
    require('../../../../includes/db.php');
    $nombre= $_POST['nombre'];

    print("area: " .$nombre);

    $query = "INSERT INTO area (nombre_area) VALUES ('$nombre')";

    $ejecutar = mysqli_query($connection, $query);

    header("Location: ../index.php");

    //print("<br> nombre del usuario: " . $nombre . " email: " . $email . " telefono: " . $telefono );//

    ?>