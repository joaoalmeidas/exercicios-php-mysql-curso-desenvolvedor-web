<?php
    //Passo 1 - Abrir conexao
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";
    $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);
    
    // Passo 2 - Testar conexão
    if(mysqli_connect_errno()){
        die("Conexão falhou: " .mysqli_connect_errno());
    }
?>

<?php
    //Passo 3 - Abrir consulta ao banco de dados.
    $consulta_categorias =  "SELECT * ";
    $consulta_categorias .= "FROM categorias";
    $categorias = mysqli_query($conecta, $consulta_categorias);

    if(!$categorias){
        die("Falha na consulta ao banco");
    }
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            while($registro = mysqli_fetch_assoc($categorias)){
                print_r($registro);
                echo "<br>";
            }
        ?>
    </body>
</html>


<?php
    mysqli_close($conecta);
?>