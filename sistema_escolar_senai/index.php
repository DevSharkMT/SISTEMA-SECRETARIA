<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI</title>
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
    <link rel="stylesheet" href="Pasta_css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php 
    session_start();
    session_destroy();
?>
<body>
    <div class="topo">
        <div class="tarja">
            <img src="Imagens/tarja.jpg" alt="error" width="100%" height="150px">
        </div>

        <div class="logo">
            <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
        </div>

    </div>
    
    <center>

        <div class="box-user">
            <div class="tela_login">

                <form method="POST" action="login.php">
                    <div class="aba_login">
                        <input type="text" name="usuario" id="usuario" placeholder="LOGIN">
                        <i class='bx bxs-user'></i>
                        <input type="password" name="senha" id="senha" placeholder="SENHA">
                        <i class='bx bx-lock-alt'></i>
                    </div>

                    <br>

                    <div class="perfil">
                        PERFIL:<select name="perfil" id="perfil">
                            <option value="escola">ESCOLA</option>
                            <option value="empresa">EMPRESA</option>
                            <option value="aluno">ALUNO</option>
                            <option value="ex_aluno">EX-ALUNO</option>
                        </select>
                        <br>
                    </div>

                    <br>

                    <div class="botoes">
                        <div class="bt_entrar">
                            <button type="submit" class="botao" name="entrar" id="entrar">ENTRAR</button> <br>
                        </div> 
                    </div>

                </form>

                <div class="bt_cadastrar">
                    <a href="cadastro_aluno_pagina.php">
                        <button type="submit" class="botao_1" name="entrar_1" id="cadastrar">CADASTRAR COMO ALUNO</button>
                    </a>
                </div>

            </div>
        </div>
    </center>
    <div class="rodape">
        <img src="Imagens/rodap.jpg" alt="error" width="80%">

        <div class="rod_cab">
            <div class="texto_fiemg">
                <a href="https://www.fiemg.com.br/conheca-a-fiemg/" style="color:white;">Conheça a FIEMG</a>
            </div>

            <div class="texto_fale">
                <a href="https://www.fiemg.com.br/fale-conosco/" style="color:white;">Fale Conosco</a>
            </div>

            <div class="texto_sac">
                <a href="https://www.fiemg.com.br/sac/" style="color:white;">SAC</a>
            </div>

            <div class="texto_intra">
                <a href="https://nossaintranet.fiemg.com.br/Account/Login?ReturnUrl=%2F" style="color:white;">Intranet</a>
            </div>
            
        </div>
    </div>
</body>
</html>