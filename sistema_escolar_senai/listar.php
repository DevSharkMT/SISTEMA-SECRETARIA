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
            <title>LISTAGEM</title>
            <link rel="stylesheet" href="Pasta_css/listar.css">
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

                <h1 class="listagem_text">LISTAGEM DAS EMPRESAS</h1>
                <br>
                <table border="1" class="tabela_listar">
                    <thead>
                        <tr>
                        <th scope="col">CNPJ</th>
                        <th scope="col">NOME</th>
                        <th scope="col">TELEFONE</th>
                        <th scope="col">E-MAIL</th>
                        <th scope="col">USUÁRIO</th>
                        <th scope="col">SENHA</th>
                        <th scope="col" style="text-align: center;">ARQUIVOS</th>
                        <th scope="col" style="text-align: center;">RELATÓRIOS</th>
                        <th scope="col" style="text-align: center;">EXCLUIR EMPRESA</th>
                        </tr>
                    </thead>

                    <?php
                        require_once "connect.php";

                        $sql_query = "SELECT  * FROM empresas";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) {
                                $cnpj = $row['cnpj'];
                                $nome = $row['nome'];
                                $telefone = $row['telefone'];
                                $email = $row['e_mail'];
                                $usuario = $row['usuario'];
                                $senha = $row['senha'];
                        
                    ?>

                    <tr>
                        <td><?php echo $cnpj; ?></td>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $telefone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $usuario; ?></td>
                        <td><?php echo $senha; ?></td>
                        <td>
                            <form action="arquivo.php" method="post" enctype="multipart/form-data" class="lista">
                                <input type="text" name="cnpj" id="cnpj" value="<?php echo $cnpj; ?>" hidden>
                                <input type="text" name="usuario" id="usuario" value="<?php echo $usuario; ?>" hidden>
                                <b>APENAS NÚMEROS: </b> <input class="input_mes" type="text" name="mes" id="mes" placeholder="MÊS" required> 
                                <input class="input_ano" type="text" name="ano" id="ano" placeholder="ANO" required>                          
                                <input type="file" name="file" id="file" class="a">
                                <input type="submit" name="enviar" id="enviar" value="Criar Diretório">
                            </form>
                        </td>
                        <td>
                            <form action="lista_relatorio.php" method="post" enctype="multipart/form-data">
                                <button class="vermais" value="<?php echo $cnpj; ?>" name="cnpj" id="cnpj" type="submit">VER MAIS</button>
                            </form>
                        </td>
                        <td>
                            <a href="deletar.php?cnpj=<?php echo $cnpj; ?>&usuario=<?php echo $usuario;?>" onclick="return confirm('Tem certeza que deseja deletar todos os DADOS desta empresa?')" class="excluir_empresa" style="color:red; text-decoration:none; font-size:110%; font-weight: 900;">Excluir Empresa</a>
                        </td>
                    </tr>

                    <?php
                            }
                        }
                        $conn->close();
                    ?>   
                </table>

            </center>

            <script>
                const mainForm = document.querySelector('form')
                mainForm.addEventListener('input',(e) => {
                    const element = e.target

                    if(element.id === 'file'){
                        const file = element.files[0]
                        element.labels[0].innerHTML = file.name
                    }
                })
            </script>
        </body>
        </html>
<?php
    }else{
        header("location:index.php");
}
?>