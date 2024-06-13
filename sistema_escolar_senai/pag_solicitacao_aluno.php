<?php
    session_start();
    if(isset($_SESSION['login_aluno']) && $_SESSION['login_aluno'] === TRUE || (isset($_SESSION['login_exaluno']) && $_SESSION['login_exaluno'] === TRUE)){
?>

        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="Pasta_css/solicitacao_pagina.css">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <title>SOLICITAÇÃO</title>
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
                <a href="menu_aluno.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <center>

                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Solicitação</th>
                            <th scope="col">Observações</th>
                            <th scope="col">Status do Pedido</th>
                            <th scope="col">Arquivo</th>
                            <th scope="col">Observações da secretaria</th>
                        </tr>
                    </thead>

                        <?php
                            require_once "connect.php";
                            
                            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                $usuario = $_POST["usuario"];
                                $sql_query_2 = "SELECT * FROM solicitacoes WHERE cpf = '$usuario'";
                                if ($result_2 = $conn ->query($sql_query_2)) {
                                    while ($row = $result_2 -> fetch_assoc()) { 
                                        $id = $row['id_solicitacao'];
                                        $modalidade = $row['modalidade'];
                                        $solicitacao = $row['solicitacao'];
                                        $observacoes = $row['observacoes'];
                                        $status = $row['status'];
                                        $envio = $row['solicitacao_envio'];
                                        $obs_secretaria = $row['obs_secretaria'];
                        ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $modalidade; ?></td>
                                    <td><?php echo $solicitacao; ?></td>
                                    <td><?php echo $observacoes; ?></td>
                                    <td><?php echo $status; ?></td>
                                    <?php
                                        if ($envio !== "") {
                                            echo "<td><a href='$envio' style='text-decoration: none; color: #04549c;' download><i class='bx bxs-download'></i></a></td>";
                                        } else {
                                            echo "<td>Não Disponível</td>";
                                        }
                                    ?>
                                    <td><?php echo $obs_secretaria; ?></td>
                                </tr>
                                
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
    } else {
        header("location:index.php");
}
?>