<?php 
include_once '../includes/_banco.php';
include_once '_head.php';

if (isset($_GET['id']) || !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM receitas WHERE ReceitaID = ".$id;
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);

} else {
    $id = '';
    $dados['Titulo']= '';
    $dados['Video']= '';  
    $dados['Descricao']= '';
    $dados['Imagem']= '';  

}
include_once '_menu.php';
?>
    <main>
        <h2>Adminiministração das Receitas</h2>
        <a href="receitas-lista.php">Listagem</a>
        <hr>
        <form action="receitas-processa.php" method="post" enctype="multipart/form-data">
            <input type="hidden" value="salvar" name="acao"><br>
            <input type="hidden" name="id" value="<?php echo $id;?>"><br>
            <label for="titulo">Titulo:</label><br>
            <input type="text" id="titulo" name="titulo" value="<?php echo $dados['Titulo'];?>"><br>
            <label for="video">Video:</label><br>
            <textarea type="text" id="video" name="video" style="width: 300px; height"><?php echo $dados['Video']?></textarea><br>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao"><?php echo $dados['Descricao']?></textarea><br>
            <label for="imagem">Imagem:</label><br>
            <?php 
            if (!empty($dados['Imagem'])    ){    
            ?>
                <img src="../receitas/<?php echo $dados['Imagem']?>" width="150" /><br>
            <?php 
            }
            ?>
            <input type="file" name="foto"><br>
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>
<?php 
include_once '_footer.php'; 
?>