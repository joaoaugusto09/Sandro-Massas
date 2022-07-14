<?php 
include_once '../includes/_banco.php';
include_once '_head.php';

if (isset($_GET['id']) || !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE ProdutoID = ".$id;
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);

} else {
    $id = '';
    $dados['Nome']= '';
    $dados['Preco']= '';  
    $dados['Descricao']= '';
    $dados['Imagem']= '';  

}
include_once '_menu.php';
?>
    <main>
        <h2>Adminiministração dos Produtos</h2>
        <a href="produtos-lista.php">Listagem</a>
        <hr>
        <form action="produtos-processa.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="salvar" name="acao"><br>
            <input type="hidden" name="id" value="<?php echo $id;?>"><br>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
            <label for="preco">Preço:</label><br>
            <input type="number" id="preco" name="preco" value="<?php echo $dados['Preco']?>"><br>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao"><?php echo $dados['Descricao']?></textarea><br>
            <label for="imagem">Imagem:</label><br>
            <?php 
            if (!empty($dados['Imagem'])    ){    
            ?>
                <img src="../produtos/<?php echo $dados['Imagem']?>" width="150" /><br>
            <?php 
            }
            ?>
            <input type="file" name="foto"><br>
            <label for="categoria">Categoria:</label><br>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>
<?php 
include_once '_footer.php'; 
?>