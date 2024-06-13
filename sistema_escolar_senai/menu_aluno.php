<?php
    session_start();
    if(isset($_SESSION['login_aluno']) && $_SESSION['login_aluno'] === TRUE){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link rel="stylesheet" href="Pasta_css/menu_aluno.css">

            <title>MENU DE ALUNO</title>
        </head>

        <style>
            body{
                background-image: url(Imagens/back.png);
                background-repeat: no-repeat;
                background-position: 0px 50px;
                background-size: 100%;
            }
        </style>

        <body>

            <div class="topo">
                <div class="tarja">
                    <img src="Imagens/tarja.jpg" alt="error" width="100%" height="150px">
                </div>
                <div class="logo">
                    <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
                </div>
            </div>

            <div class="back">
                <a href="index.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <center>

                <h1>SECRETARIA ESCOLAR</h1>
                <h3>SENAI Juiz de Fora CFP José Fagundes Netto</h3>

                <br><br>

                <div class="bv">
                    <?php   
                        require_once 'cookie.php';
                    ?>
                </div>

                <div class="box-user">
                    <div class="texto_1">
                        <a href="justifica.php" style="text-decoration: none; color: white;">JUSTIFICATIVA DE FALTA</a> <br>
                    </div>

                    <div class="texto_2">
                        <a href="solicitacao.php" style="text-decoration: none; color: white;">SOLICITAÇÃO DE EMISSÃO DE DOCUMENTOS ESCOLARES</a> <br>
                    </div>
                    
                    <div class="botao_solicit">
                        <form  method="post" action="pag_solicitacao_aluno.php" enctype="multipart/form-data">
                            <input type="text" name="usuario" id="usuario" value="<?php echo $_COOKIE['usuario']; ?>" hidden>
                            <input class="botao_solicit" type="submit" value="Ver Minhas Solicitações">
                        </form>
                    </div>

                </div>

            </center>

        </body>
        </html>

<?php
    } else if(isset($_SESSION['login_exaluno']) && $_SESSION['login_exaluno'] === TRUE){
?>
    <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link rel="stylesheet" href="Pasta_css/menu_aluno.css">
            <title>MENU DE ALUNO</title>
        </head>

        <style>
            body{
                background-image: url(Imagens/back.png);
                background-repeat: no-repeat;
                background-position: 0px 50px;
                background-size: 100%;
            }
        </style>

        <body>

        <div class="topo">
                <div class="tarja">
                    <img src="Imagens/tarja.jpg" alt="error" width="100%" height="150px">
                </div>
                <div class="logo">
                    <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
                </div>
            </div>

            <div class="back">
                <a href="index.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <center>

                <h1>SECRETARIA ESCOLAR</h1>
                <h3>SENAI Juiz de Fora CFP José Fagundes Netto</h3>

                <br><br>

                <div class="bv">
                    <?php   
                        require_once 'cookie.php';
                    ?>
                </div>

                <div class="box-user">
                    <div class="texto_2">
                        <a href="solicitacao.php" style="text-decoration: none; color: white;">SOLICITAÇÃO DE EMISSÃO DE DOCUMENTOS ESCOLARES</a> <br>
                    </div>
                    
                    <div class="botao_solicit">
                        <form  method="post" action="pag_solicitacao_aluno.php" enctype="multipart/form-data">
                            <input type="text" name="usuario" id="usuario" value="<?php echo $_COOKIE['cpf']; ?>" hidden>
                            <input class="botao_solicit" type="submit" value="Ver Minhas Solicitações">
                        </form>
                    </div>
                </div>

            </center>
            
        </body>
        </html>

<?php
    } else {
        header("location:index.php");
}
?>