<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>In�cio</title>
        <link rel="shortcut icon" href="imagens/onlinelogomaker-061115-1725.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/navbar001.css" rel="stylesheet" type="text/css"/>
        <link href="css/indexcss.css" rel="stylesheet" type="text/css"/>
        <link href="css/rodape.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <img src="imagens/logo03.png" width="300"/>

        <nav>
            <ul>


                <li><a href="index.php">In�cio</a></li>
                <li><a href="about.php">Sobre</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="contato.php">Contato</a></li>


            </ul>

        </nav>


        <div class="conteudo">              
            <table>
                <img src="imagens/alimentos02.jpg" width="1150"/>                 

                <form class="form-signin" method="post" action="" name="frmacesso">
                    

                    <td>
                        <label for="inputEmail" class="sr-only">Usu�rio</label>
                        <input type="text" id="inputEmail" class="form-control" placeholder="Nome do usu�rio" 
                               required autofocus name="txtusuario">
                        <label for="inputPassword" class="sr-only">Senha</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Informe sua senha" 
                               required name="txtsenha">
                        <input type="submit" name="btnenviar" class="btn btn-lg btn-primary btn-block"
                               value="Acesso"/>
                        <a href="administrador/adcUser.php">Cadastro<a>
                    </td>


                </form>
            </table>       
        </div>


        <div class="rodape"><h4>Copyright � Equipe Prato Inteligente</h4> </div>
        <?php
        $conexao = mysql_connect('mysql.hostinger.com.br', 'u963154851_canti', 'Pr@t01Ntelig3n7e');
        if (!$conexao) {
            die('Conex�o cancelada:' . mysql_error());
        } echo '';
        $banco = mysql_select_db('u963154851_pinct', $conexao);

        /* $consulta = mysql_query("select * from usuarios");
          while($resultado = mysql_fetch_array($consulta)){
          echo $resultado['nome'];
          } */
        if (isset($_POST['btnenviar'])) {
            echo 'Voc� clicou em mim';
            $usuario = $_POST['txtusuario'];
            $senha = md5($_POST['txtsenha']);
            $consulta = mysql_query("select * from usuarios where login='$usuario' and senha='$senha'");
            if ($resultado = mysql_fetch_array($consulta)) {
                header('location:area_restrita.php');
                
            } else {
                echo 'Acesso Negado';
            }
        }
        ?>
    </body>
</html>
