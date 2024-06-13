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
            <title>TELA DE CADASTRO DE USUÁRIO</title>
            <link rel="stylesheet" href="Pasta_css/cadastro_user.css">
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

            <div class="b_menu">
                <a href="menu_escola.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <br>
            <br>

            <center>

                <h1>CADASTRAR USUÁRIO</h1>
                <div class="formulario_usuario">
                    <div class="box-user">
                        <br>
                        <form method="POST" action="cadastro_user.php">
                            <div class="login_senha_perfil">
                                <label>👥CRIAR USUÁRIO:</label><br><input type="text" name="usuario" id="usuario" required><br> <br>
                                <label>🔒CRIAR SENHA:</label><br><input type="password" name="senha" id="senha" required><br> <br>
                                <div class="enviar_2">
                                    <input type="submit">
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>

            </center>

        </body>
<?php
    }else{
        header("location:index.php");
}
?>