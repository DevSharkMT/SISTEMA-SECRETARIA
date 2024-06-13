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
                <link rel="stylesheet" href="Pasta_css/justifica_pagina.css">
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

            <div class="back">
                <a href="controle_aluno.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

                <center>

                    <h1 class="listagem_text">INFORMAÇÕES DO ALUNO</h1>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">CPF</th> 
                                <th scope="col">Modalidade</th>
                                <th scope="col">Justificativa</th>
                                <th scope="col">Data</th>
                                <th scope="col">Baixar Arquivo</th>
                                <th scope="col">Mensagem</th>
                            </tr>
                        </thead>

                            <?php
                                require_once "connect.php";

                                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                    $usuario = $_POST["usuario"];
                                    $sql_query = "SELECT * FROM justificativas WHERE usuario_cpf = $usuario";
                                    if ($result = $conn ->query($sql_query)) {
                                        while ($row = $result -> fetch_assoc()) { 
                                            $id = $row['id'];
                                            $cpf = $row['usuario_cpf'];
                                            $modalidade = $row['modalidade'];
                                            $motivo = $row['motivo'];
                                            $data = $row['data'];
                                            $anexo = $row['arquivo'];
                                            $observacoes = $row['observacoes']; 
                                ?>

                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $cpf; ?></td>
                                    <td><?php echo $modalidade; ?></td>
                                    <td><?php echo $motivo; ?></td>
                                    <td><?php echo $data; ?></td>
                                    <td class="baixar"><a href="<?php echo $anexo; ?>" style="text-decoration: none; color: #04549c;" download><i class='bx bxs-download'></i></a></td>
                                    <td><?php echo $observacoes; ?></td>
                                </tr>

                            <?php
                                        }    
                                    }
                                }    $conn->close(); 
                            ?>      
                    </table>
                </center>

            </body>
        </html>

<?php
    } else {
        header("location:index.php");
}
?>