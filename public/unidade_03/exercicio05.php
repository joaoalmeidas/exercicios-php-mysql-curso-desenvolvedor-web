<?php
    require_once("../../conexao/conexao.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <ul>
            <?php
                //Passo 4 - Listagem dos dados consultados do bancos de dados
                while($registro = mysqli_fetch_assoc($categorias)){
            ?>
                    <li><?php echo $registro["nomeproduto"]?></li>
            <?php
                }
            ?>
        </ul>
        <?php
            //Passo 5 -liberar dados da memória
            mysqli_free_result($categorias);
        ?>
    </body>
</html>


<?php
    //Passo 6 - Fechar conexão
    mysqli_close($conecta);
?>