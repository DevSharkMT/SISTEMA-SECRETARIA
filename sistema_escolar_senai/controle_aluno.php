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
            <link rel="stylesheet" href="Pasta_css/controle_aluno.css">
            <title>CONTROLE DE ALUNO</title>
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

        <div class="back">
            <a href="menu_escola.php">
                <button>VOLTAR AO MENU</button>
            </a>
        </div>

            <center>
                <h1 class="listagem_text">CONTROLE DE ALUNOS</h1>

                <br>

                <div class="pesquisa">
                    <form method="post" action="pesquisar_aluno.php">
                        <input class="botao_pesquisar" type="search" name="usuario" id="usuario" placeholder="Informe o usuário(CPF)" aria-label="Search">
                        <div class="icone">
                            <button type="submit"><i class='bx bx-search' ></i></button>     
                        </div>
                    </form>
                </div>

                <br>
                
                <table border="1" class="tabela_listar">
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
                    
                    <?php
                        require_once "connect.php";
                        $sql_query = "SELECT  * FROM alunos";
                        if ($result = $conn ->query($sql_query)){
                            while ($row = $result->fetch_assoc()){
                                $usuario = $row['usuario'];
                                $senha = $row['senha'];
                                $nome = $row['nome'];
                                $telefone = $row['telefone'];
                                $e_mail = $row['e_mail'];
                                $cep = $row['cep'];
                                $curso = $row['curso'];
                                $perfil = $row['perfil'];    
                    ?>

                    <tr>
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
                                    <button class="arquivos" value="<?php echo $usuario; ?>" name="usuario" id="usuario" type="submit"><b>SOLICITAÇÕES</b></button>
                                </form>
                            </div>
                            <br>
                            <div class="just">
                                <form action="justifica_pagina.php" method="post" enctype="multipart/form-data">
                                    <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" hidden>
                                    <button class="arquivos" value="<?php echo $usuario; ?>" name="usuario" id="usuario" type="submit"><b>JUSTIFICATIVA</b></button>
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

                    <?php
                            }
                        }
                    ?>        
                </table> 
            </center>
        </html>

<?php
    } else {
        header("location:index.php");
}
?>