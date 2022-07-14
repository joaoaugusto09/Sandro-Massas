<?php 
include_once '../includes/_banco.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao) {
    case 'excluir':
        $sql = "DELETE FROM receitas WHERE RrodutoID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./receitas-lista.php');
        
        break;

    case 'salvar':
        $titulo = $_POST['titulo'];
        $video = $_POST['video'];
        $descricao = $_POST['descricao'];

        if ($_FILES['foto']['size'] > 0) {
            $uploaddir = '../receitas/';
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nomearquivo = 'receita-'.'-'.rand().'.'.$extensao;
            $uploadfile = $uploaddir."/" . $nomearquivo;
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        } else {
            $nomearquivo = $_POST['imagem'];
        }
        
        if (!isset($_POST['id']) || empty($_POST['id'])){
            $sql = "INSERT INTO `receitas` (`ReceitaID`, `Titulo`, `Imagem`, `Descricao`, `Video`) VALUES (NULL, '".$titulo."','".$nomearquivo."','".$descricao."','".$video."'); ";   
        } else {
            $sql = "UPDATE produtos SET 'Nome'='".$titulo."', 'Preco'='".$video."', 'Descricao'='".$descricao."', 'imagem'='".$nomearquivo."' WHERE    ProdutoID='".$id."'; ";
        }

        mysqli_query($conn, $sql);

        header('location: ./receitas-lista.php');
        break;
}
?>