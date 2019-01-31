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
    $consulta_categorias =  "SELECT nomeproduto ";
    $consulta_categorias .= "FROM produtos";
    $categorias = mysqli_query($conecta, $consulta_categorias);

    if(!$categorias){
        die("Falha na consulta ao banco");
    }
?>