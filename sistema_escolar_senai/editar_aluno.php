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
            <link rel="stylesheet" href="Pasta_css/editar_aluno.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <title>EDITAR ALUNO</title>
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
            <a href="controle_aluno.php">
                <button>VOLTAR AO MENU</button>
            </a>
        </div>

            <center>

                <h1 style="text-align: center;margin: 50px 0;">ATUALIZAR DADOS DO ALUNO</h1>
                <div class="atualizar">
                    <?php 
                        require_once "connect.php";
                        @$sql_query = "SELECT * FROM alunos WHERE usuario = ".$_GET["usuario"];
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $usuario = $row['usuario'];
                                $senha = $row['senha'];
                                $nome = $row['nome'];
                                $telefone = $row['telefone'];
                                $e_mail = $row['e_mail'];
                                $cep = $row['cep'];
                                $curso = $row['curso'];
                                $perfil = $row['perfil']; 
                    ?>

                        <?php echo $usuario?>

                        <div class="box-user">
                            <form method="POST" action="atualizar_aluno.php">
                                <input type="hidden" class="texto_cpf" value="<?php echo $usuario; ?>" name="usuario" id="usuario" required>
                                
                                <div class="texto">
                                    <label class="form-label">Nome:</label><br>
                                    <input type="text" class="input_texto" value="<?php echo $nome; ?>" name="nome" id="nome" required>
                                </div>

                                <div class="texto">
                                    <label class="form-label">Telefone:</label><br>
                                    <input type="tel" class="input_texto" value="<?php echo $telefone; ?>" name="telefone" id="telefone" required>
                                </div>

                                <div class="texto">
                                    <label class="form-label">Email:</label><br>
                                    <input type="mail" class="input_texto" value="<?php echo $e_mail; ?>" name="e_mail" id="e_mail" required>
                                </div>

                                <div class="texto">
                                    <label class="form-label">Cep:</label><br>
                                    <input type="text" class="input_texto" value="<?php echo $cep; ?>" name="cep" id="cep" required>
                                </div>

                                <div class="texto">
                                    <label class="form-label">Curso:</label><br>
                                    <input type="text" class="input_texto" value="<?php echo $curso; ?>" name="curso" id="curso" required>
                                </div>

                                <div class="texto">
                                    <label class="form-label">Perfil:</label><br> 
                                    <select name="perfil" id="perfil" class="input_texto">
                                        <option value="aluno">Aluno</option>
                                        <option value="ex_aluno">Ex Aluno</option>
                                    </select>
                                </div>

                                <div class="texto">
                                    <button type="submit" class="botao-atualizar">ATUALIZAR</button>
                                </div>

                            </form>
                        </div>

            </center>
                    
                    <?php 
                        }
                    }
                        $conn->close();
                    ?>
                </div>      
            
        </body>
        </html>

<?php
    } else {
        header("location:index.php");
}
?>