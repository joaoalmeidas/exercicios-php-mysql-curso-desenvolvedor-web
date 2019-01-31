<?php
    function enviarMensagem($dados){
        //Dados do formulário
        $nome_usuario = $dados['nome'];
        $email_usuario = $dados['email'];
        $mensagem_usuario = $dados['mensagem'];
        
        //Criar variáveis de envio
        $destino = "suporte@imediabrasil.com.br";
        $remetente = "imediabrasil@imediabrasil.com.br";
        $assunto = "Mensagem do site";
        
        //Monta o corpo da mensagem
        
        $mensagem = "O usuário" .$nome_usuario. "enviou uma mensagem" . "</br>";
        $mensagem .= "email do usuario: ". $email_usuario. "</br>";
        $mensagem .= "mensagem" . "</br>";
        $mensagem .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }
?>