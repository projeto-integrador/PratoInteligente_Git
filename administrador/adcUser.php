<html>
    <head>
        <title>Adicionar Usuários</title>
        <link rel="shortcut icon" href="../imagens/onlinelogomaker-061115-1725.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/navbar001.css" rel="stylesheet" type="text/css"/>
        <link href="../css/estilo3.css" rel="stylesheet" type="text/css"/>
        <link href="../css/titulosetc.css" rel="stylesheet" type="text/css"/>
        <link href="../css/rodape.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <img src="../imagens/logo03.png" width="300"/>
        <nav>
            <ul>

                <li><a href="../index.php">Início</a></li>
                <li><a href="adcUser.php">Adicionar Usuário</a></li>
                <li><a href="remov_alterar_usuario.php">Remover/alterar Usuário</a></li>
                <li><a href="adc_remov_produtos.php">Adicionar produtos</a></li>




                </li>


            </ul>
        </nav>

        <div class="conteudo">

            <form action="Script_do_Formulario.php" method="post">


                <fieldset>
                    <legend><h1>Dados Pessoais</h1></legend>
                    <table cellspacing="10">
                        <tr>
                            <td>
                                <label for="nome">Nome: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="email">
                            </td>
                            <td>
                                <label for="sobrenome">Sobrenome: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="sobrenome">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nascimento: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="dia" size="2" maxlength="2" value=""> 
                                <input type="text" name="mes" size="2" maxlength="2" value=""> 
                                <input type="text" name="ano" size="4" maxlength="4" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="rg">RG: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="rg" size="13" maxlength="13"> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>CPF:</label>
                            </td>
                            <td align="left">
                                <input type="text" name="cpf" size="9" maxlength="9"> - <input type="text" name="cpf2" size="2" maxlength="2">
                            </td>
                        </tr>
                    </table>
                </fieldset>

                <br />
                <!-- ENDEREÇO -->
                <fieldset>
                    <legend><h1>Dados de Endereço</h1></legend>
                    <table cellspacing="10">

                        <tr>
                            <td>
                                <label for="rua">Rua:</label>
                            </td>
                            <td align="left">
                                <input type="text" name="rua">
                            </td>
                            <td>
                                <label for="numero">Numero:</label>
                            </td>
                            <td align="left">
                                <input type="text" name="numero" size="4">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="bairro">Bairro: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="bairro">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="estado">Estado:</label>
                            </td>
                            <td align="left">
                                <select name="estado"> 
                                    <option value="ac">Acre</option> 
                                    <option value="al">Alagoas</option> 
                                    <option value="am">Amazonas</option> 
                                    <option value="ap">Amapá</option> 
                                    <option value="ba">Bahia</option> 
                                    <option value="ce">Ceará</option> 
                                    <option value="df">Distrito Federal</option> 
                                    <option value="es">Espírito Santo</option> 
                                    <option value="go">Goiás</option> 
                                    <option value="ma">Maranhão</option> 
                                    <option value="mt">Mato Grosso</option> 
                                    <option value="ms">Mato Grosso do Sul</option> 
                                    <option value="mg">Minas Gerais</option> 
                                    <option value="pa">Pará</option> 
                                    <option value="pb">Paraíba</option> 
                                    <option value="pr">Paraná</option> 
                                    <option value="pe">Pernambuco</option> 
                                    <option value="pi">Piauí</option> 
                                    <option value="rj">Rio de Janeiro</option> 
                                    <option value="rn">Rio Grande do Norte</option> 
                                    <option value="ro">Rondônia</option> 
                                    <option value="rs">Rio Grande do Sul</option> 
                                    <option value="rr">Roraima</option> 
                                    <option value="sc">Santa Catarina</option> 
                                    <option value="se">Sergipe</option> 
                                    <option value="sp">São Paulo</option> 
                                    <option value="to">Tocantins</option> 
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="cidade">Cidade: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="cidade">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="cep">CEP: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <br />

                <!-- DADOS DE LOGIN -->
                <fieldset>
                    <legend><h1>Dados de login</h1></legend>
                    <table cellspacing="10">
                        <tr>
                            <td>
                                <label for="email">E-mail: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="imagem">Imagem de perfil:</label>
                            </td>
                            <td>
                                <input type="file" name="imagem" >

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="login">Login de usuário: </label>
                            </td>
                            <td align="left">
                                <input type="text" name="login">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pass">Senha: </label>
                            </td>
                            <td align="left">
                                <input type="password" name="pass">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="passconfirm">Confirme a senha: </label>
                            </td>
                            <td align="left">
                                <input type="password" name="passconfirm">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <br />
                <input type="submit">
                <input type="reset" value="Limpar">
            </form>



        </div>

        <div class="rodape"><h4>Copyright © Equipe Prato Inteligente</h4> </div>
        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        ?>
    </body>
</html>
