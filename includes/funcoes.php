<?php

include 'conexao.php';
        
        if (isset($_POST['enviar'])){
                        
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $mensagem = $_POST["mensagem"];
            $id_contatos = mysql_insert_id();
            
            
            

            if ((empty($nome)) || (empty($telefone)) || (empty($email)) || (empty($mensagem))) {
                echo "Preencha todos os campos!";
            } else {
                $inserirDados = mysql_query("INSERT INTO contatos (nome, telefone, email, mensagem) VALUES('$nome', '$telefone', '$email', '$mensagem')");
                echo 'Enviado com sucesso';
            }
        }
?>