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
            <link rel="stylesheet" href="Pasta_css/pesquisar_aluno.css">
            
            <title>PESQUISA DE ALUNOS</title>
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

            <center>
                <h1 class="listagem_text">INFORMAÇÕES DO ALUNO</h1>
                <div class="back">
                    <a href="controle_aluno.php">
                        <button>VOLTAR AO MENU</button>
                    </a>
                </div>

                <br>

                <table>
                    <div class="tabela_pesquisar">
                        <thead>
                            <tr>
                            <th scope="col">USUÁRIO</th>
                            <th scope="col">SENHA</th>
                            <th scope="col">NOME</th>
                            <th scope="col">TELEFONE</th>
                            <th scope="col">E_MAIL</th>
                            <th scope="col">CEP</th>
                            <th scope="col">CURSO</th>
                            <th scope="col">PERFIL</th>
                            <th scope="col" rowspan="2" style="text-align: center;">ARQUIVOS</th>
                            </tr>
                        </thead>
                        </div>

                        <?php
                            require_once "connect.php";
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $usuario = $_POST["usuario"];
                                $sql_query = "SELECT * FROM alunos WHERE usuario = $usuario";
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
                                <tr class="trow">
                                <td><?php echo $usuario; ?></td>
                                <td><?php echo $senha; ?></td>
                                <td><?php echo $nome; ?></td>
                                <td><?php echo $telefone; ?></td>
                                <td><?php echo $e_mail; ?></td>
                                <td><?php echo $cep; ?></td>
                                <td><?php echo $curso; ?></td>
                                <td><?php echo $perfil; ?></td>
                                <td>
                                    <div class="solicit">
                                        <form action="solicitacao_pagina.php" method="post" enctype="multipart/form-data">
                                            <button class="arquivos" value="<?php echo $usuario; ?>" name="usuario" id="usuario" type="submit">SOLICITAÇÕES</button>
                                        </form>
                                    </div>

                                    <div class="just">
                                        <form action="justifica_pagina.php" method="post" enctype="multipart/form-data">
                                            <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" hidden>
                                            <button class="arquivos" value="<?php echo $usuario; ?>" name="usuario" id="usuario" type="submit">JUSTIFICATIVA</button>
                                        </form>
                                    </div>
                                    
                                </td>
                                <td>
                                    <div class="botao_upgrade">
                                        <button>
                                            <a href="editar_aluno.php?usuario=<?php echo $usuario; ?>" class="editar">EDITAR</a>
                                        </button>
                                    </div>
                                </td>
                                </tr>
    
                    </div>

                    <?php
                            }    
                        }
                    }
                        $conn->close(); 
                    ?>      
                </table>
            </center>

        </body>
        </html>
<?php
    }else{
        header("location:index.php");
}
?>