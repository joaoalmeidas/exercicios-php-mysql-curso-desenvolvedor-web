<?php require_once("../../conexao/conexao.php"); ?>

<?php
    //Determinar localidade Brasil
    setlocale(LC_ALL, 'pt_BR');
    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
    $produtos .="FROM produtos ";
    $resultado = mysqli_query($conecta, $produtos);
    if(!$resultado){
        die("Falha na consulta do banco de dados.");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <?php
            include_once("_incluir/topo.php");
        ?>
        <main> 
          
          <div id="listagem_produtos">
           <?php
                while($linha = mysqli_fetch_assoc($resultado)){  
           ?>
           
               <ul>
                  <li class="imagem">
                      <a href="detalhe.php">
                          <img src="<?php echo $linha["imagempequena"] ?>" alt=""> 
                      </a>
                  </li>
                  <li><h3><?php echo $linha["nomeproduto"]?></h3></li>
                  <li>Tempo de Entrega: <?php echo $linha["tempoentrega"]?></li>
                  <li>Preco: <?php echo number_format($linha["precounitario"], 2, ',', '.') ." R$"?></li>
                </ul>
           
           <?php
                }
           ?>
        
          </div>
            
        </main>
        
        <?php
            include_once("_incluir/rodape.php");
        ?>
        
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>