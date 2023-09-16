<?php
$hostname = "localhost"; //127.0.0.1
$username = "root";
$password = "";
$database = "Web_de_Raul";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection){
    die("Conexión Fallida: " . mysqli_connect_error());
        
//}else{
    //echo "Conexión Exitosa";
}

?>