<?php 
include_once "_banco.php";


$sql = "INSERT INTO `categorias` (`Nome`) VALUES ('Carros')";
$result = mysqli_query($conn, $sql);

?>