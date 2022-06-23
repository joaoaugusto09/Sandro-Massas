<?php
// variaveis de controle
$paginaAtual = 'Receita Detalhe';
include_once './includes/functions.php';
include_once './includes/_banco.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM receitas WHERE ReceitaID = {$id}") or die("Erro");
$receita = mysqli_fetch_assoc($sql)
?>

    <h1><?php echo $receita['Titulo'];?></h1>
    <h1><?php echo $receita['CategoriasReceitasID']?></h1>
    <hr>
    <p><?php echo $receita['Descricao'];?></p>
    <img src="./receitas/<?php echo $receita['Imagem']; ?>" >
    <hr>
    <?php echo $receita['Video']?>
    <span>
        <a href="./receitas.php">Voltar</a>
    </span>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>