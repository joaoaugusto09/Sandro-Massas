<?php 
include_once '../includes/_banco.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch($acao) {
    case 'excluir':
        $sql = "DELETE FROM produtos WHERE ProdutoID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./produtos-lista.php');
        
        break;

    case 'salvar':
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        if ($_FILES['foto']['size'] > 0) {
            $uploaddir = '../produtos/';
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nomearquivo = 'produto-'.date("YmdHis").rand(0,9999999).'.'.$extensao;
            $uploadfile = $uploaddir . $nomearquivo;

            move_uploaded_file($_FILES['foto']['tmp_name'],$uploadfile);
        } else {
            $nomearquivo = $_POST['imagem'];
        }
        

        if (!isset($_POST['id']) || empty($_POST['id'])){
            $sql = "INSERT INTO  `produtos` (`ProdutoID`, `Nome`, `Imagem`, `Preco`, `Descricao`) VALUES (NULL, '".$nome."','".$nomearquivo."','".$preco."','".$descricao."'); ";   
        } else {
            $sql = "UPDATE produtos SET 'Nome'='".$nome."', 'Preco'='".$preco."', 'Descricao'='".$descricao."', 'imagem'='".$nomearquivo."' WHERE 'ProdutoID'='".$id."'; ";
        }
        mysqli_query($conn, $sql);

        header('location: ./produtos-lista.php');
        break;
}
?>