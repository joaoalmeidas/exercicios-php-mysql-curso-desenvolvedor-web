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


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    </body>
</html>


<?php
    mysqli_close($conecta);
?>