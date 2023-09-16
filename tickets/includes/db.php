<?PHP
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Web_de_Raul_ticket";

$connection = mysqli_connect($hostname, $username, $password, $database);

if(!$connection){
    die("Database connection failed: " . mysqli_connect_error());
}
?>