<?php 
include_once '../includes/_banco.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao) {
    case 'excluir':
        $sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./categoria-lista.php');
        
        break;

    case 'salvar':
        $nome = $_POST['nome'];

        if (!isset($_POST['id']) || empty($_POST['id'])){
            $sql = "INSERT INTO `categorias` (`CategoriaID`, `Nome`) VALUES (NULL, '".$nome."'); ";   
        } else {
            $sql = "UPDATE categorias SET Nome='".$nome."' WHERE    CategoriaID='".$id."'; ";
        }

        mysqli_query($conn, $sql);

        header('location: ./categoria-lista.php');
        break;
}
?>