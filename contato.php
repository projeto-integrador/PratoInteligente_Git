<!DOCTYPE html>
<!--  Data:23/06/2015 
Autor: Robson Gilmar
-->
<html>


<head>
    <title>==Contatos==</title>
    <meta charset="utf-8"/>

<link href="styles/contatoestilo.css" rel="stylesheet"/>
<link href="css/indexcss.css" rel="stylesheet" type="text/css"/>
<link href="css/navbar001.css" rel="stylesheet" type="text/css"/>
<link href="css/rodape.css" rel="stylesheet" type="text/css"/>

<script src="js/teste1.js"></script>       

</head>
<body>
    <img src="imagens/logo03.png" alt="Logo Projeto" width="300"/>
    <nav>
        <ul>


            <li><a href="index.php">Início</a></li>
            <li><a href="about.php">Sobre</a></li>
            <li><a href="equipe.php">Equipe</a></li>
            <li><a href="Contato.php">Contato</a></li>

        </ul>

    </nav>
    <form action="includes/funcoes.php" name="meu_form" method="post">
        <h1>Entre em contato conosco:</h1>


        <p class="nome">
        <form action="includes/funcoes.php" name="meu_form" method="POST" enctype="multipart/form-data">

            <label for="nome">Nome</label>
            <input type="text" id="nomeid" placeholder="Digite seu nome.." required="required" name="nome" maxlength="80">

            </p>
            <p>
            <h2>Validação de Telefone</h2>
            <label for="fone">Telefone(Formato XX-XXXXX-XXXX):</label>
            <br>
            <input name="telefone" id="phonenum" type="tel" required="required">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" id="emailid" placeholder="nickname@email.com" name="email" required="required"> 
            </p>
            <p>
                <textarea placeholder="Deixe sua opinião" name="mensagem"></textarea>
            </p>
            <p class="submit">
                <input type="submit" onclick="Enviar();" value="enviar" name="enviar">    
            </p>
        </form>      

        <br>
        <br>
        <br>

        <div class="rodape"><h4>Copyright © Equipe Prato Inteligente</h4> </div>
        <?php
        /*
          Data: 23/06/2015
         */
        
        ?>


</body>
</html>


