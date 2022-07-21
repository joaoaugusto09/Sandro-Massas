<?php
include_once '_valida.php';
include_once '../includes/_banco.php';
include_once '_head.php';

$sql = "SELECT * FROM produtos";

$resultado = mysqli_query($conn, $sql);
$total = mysqli_num_rows($resultado);

include_once '_menu.php';
?>
    <main>
        <h2>Adminiministração dos Produtos</h2>
        
        <a href="produtos-salvar.php">Inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>

            <?php 
    
if ( $total > 0 ) {
                while ($dado = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?php echo $dado['ProdutoID'];?></td>
                    <td><a href="produtos-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Nome'];?></a></td>
                    <td><a href="produtos-processa.php?acao=excluir&id=<?php echo $dado['ProdutoID']?>">Excluir</a></td>
                </tr>
            <?php 
                }
            }else{    
            ?>
            <tr>
                <td colspan="3">Resultados não encontrados</td>
            </tr>
            <?php 
            }
            ?>
            <tr>
                <td colspan="3">Total de registros: <?php echo $total;?></td>
            </tr>
        </table>
    </main>
    <?php
    include_once '_footer.php';
    ?>