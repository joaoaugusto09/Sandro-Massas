<?php
// variaveis de controle
$paginaAtual = 'Receitas';

include_once './includes/functions.php';
include_once './includes/_banco.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
$sql = mysqli_query($conn,"SELECT * FROM receitas") or die("Erro");

?>

    <section id="receitas">
        <div class="row">
    <?php
    // laco de repeticao 
    while($dados = mysqli_fetch_assoc($sql)) {
    ?>
        <div class="card col-3" style="width: 18rem;">
            <a href="./receita-detalhe.php?id=<?php echo $dados['ReceitaID'];?>">
                <img class="card-img-top" src="./receitas/<?php echo $dados['Imagem']?>" alt="<?php echo $dados['Titulo'];?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $dados['Titulo']?></h4>
                </div>
            </a>
        </div>
    <?php
    }
    ?>
        </div>
    </section>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>