<?php
    session_start();
    if(isset($_SESSION['login_escola']) && $_SESSION['login_escola'] === TRUE){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <title>MENU ESCOLA</title>
            <link rel="stylesheet" href="Pasta_css/menu_escola.css">
        </head>

        <body>

            <div class="topo">
                <div class="tarja">
                    <img src="Imagens/tarja.jpg" alt="error" width="100%" height="150px">
                </div>
                <div class="logo">
                    <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
                </div>
            </div>
            
            <div class="bv">
                <?php
                    require_once 'cookie.php';  
                ?>
            </div>

            <br>

            <center>

                <div class="pesquisa">
                    <form method="post" action="pesquisar.php">
                        <input class="botao_pesquisar" type="search" name="cnpj" id="cnpj" placeholder="Informe o CNPJ" aria-label="Search" >
                        <button type="submit"><i class='bx bx-search' ></i></button>    
                    </form>
                </div>
                
                <div class="box-user">
                    <div class="cad_empresa">
                        <a href="cadastro_pagina.php" style="text-decoration: none; color: white;">CADASTRAR EMPRESA</a>
                    </div>
                    <br>
                    
                    <div class="cad_usuarios">
                        <a href="cadastro_user_pagina.php" style="text-decoration: none; color: white;">CADASTRAR USUÁRIO</a>
                    </div>
                    <br>

                    <div class="listar">
                        <a href="listar.php" style="color: black; text-decoration: none; color: white;">LISTAR TODAS AS EMPRESAS</a>
                    </div>
                    <br>

                    <div class="ctrl_aluno">
                        <a href="controle_aluno.php" style="color: black; text-decoration: none; color: white;">CONTROLE DE ALUNOS</a>
                    </div>
                    <br>

                    <div class="sair">
                        <a href="index.php" style="text-decoration: none; color: black;" onclick="return confirm('Tem certeza que deseja SAIR?')">SAIR</a>    
                    </div>

                </div>
            </center>

        </body>
        </html>
<?php
    }else{
        header("location:index.php");
}
?>