<?php
// variaveis de controle
$paginaAtual = 'Receitas';

include_once './includes/functions.php';
include_once './includes/_dados.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
?>

    <section id="receitas">
        <div class="row">
    <?php
    // laco de repeticao 
    foreach ($dadosReceitas as $key => $value) {
    ?>
        <div class="card col-3" style="width: 18rem;">
            <a href="./receita-detalhe.php?id=<?php echo $key;?>">
                <img class="card-img-top" src="./receitas/<?php echo $value['imagem']?>" alt="<?php echo $value['titulo'];?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['titulo']?></h4>
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