<?php 
$servername = "localhost";
$database = "meusite";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Erro ao conectar no Banco: " . mysqli_connect_error());
}

?>