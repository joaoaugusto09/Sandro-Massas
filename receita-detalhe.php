<?php
// variaveis de controle
$paginaAtual = 'Receita Detalhe';
include_once './includes/functions.php';
include_once './includes/_dados.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
$id = $_GET['id'];
$receita = $dadosReceitas[$id];
?>

    <h1><?php echo $receita['titulo'];?></h1>
    <hr>
    <p><?php echo $receita['descrição'];?></p>
    <img src="./receitas/<?php echo $receita['imagem']; ?>" >
    <hr>
    <?php echo $receita['video']?>
    <span>
        <a href="./receitas.php">Voltar</a>
    </span>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>