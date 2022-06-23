<?php
// variaveis de controle
$paginaAtual = 'Produto Detalhe';
include_once './includes/functions.php';
include_once './includes/_banco.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
$id = $_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM produtos WHERE ProdutoID = {$id};") or die("Erro");
$produto = mysqli_fetch_assoc($sql)
?>

    <h1><?php echo $produto['Nome'];?></h1>
    <hr>
    <p><?php echo $produto['Descricao'];?></p>
    <img src="./produtos/<?php echo $produto['Imagem']; ?>" >
    <hr>
    <span><?php echo ConverterEmMoeda($produto['Preco']);?></span>
    <span>
        <a href="./produtos.php">Voltar</a>
    </span>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>