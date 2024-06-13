<?php
    session_start();
    if(isset($_SESSION['login_escola']) && $_SESSION['login_escola'] === TRUE){
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
                <a href="controle_aluno.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <center>

                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CPF</th> 
                            <th scope="col">Modalidade</th>
                            <th scope="col">Solicitação</th>
                            <th scope="col">Observações</th>
                            <th scope="col">STATUS DO PEDIDO</th>
                            <th scope="col">Anexar Arquivo/Boleto</th>
                        </tr>
                    </thead>

                        <?php
                            require_once "connect.php";

                            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                $usuario = $_POST["usuario"];
                                $sql_query = "SELECT * FROM solicitacoes WHERE cpf = '$usuario'";
                                if ($result = $conn ->query($sql_query)) {
                                    while ($row = $result -> fetch_assoc()) { 
                                        $id = $row['id_solicitacao'];
                                        $cpf = $row['cpf'];
                                        $modalidade = $row['modalidade'];
                                        $solicitacao = $row['solicitacao'];
                                        $observacoes = $row['observacoes'];
                                        $status = $row['status'];
                        ?>
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $cpf; ?></td>
                                    <td><?php echo $modalidade; ?></td>
                                    <td><?php echo $solicitacao; ?></td>
                                    <td><?php echo $observacoes; ?></td>
                                    <td>
                                        <form method="POST" action="receber.php" enctype="multipart/form-data">
                                            <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" hidden>
                                            <select name="status" id="status">
                                                <option value="Em Andamento">Em Andamento</option>
                                                <option value="Aguardando Pagamento">Aguardando Pagamento</option>
                                                <option value="Concluído">Concluído</option>
                                            </select>
                                            <td>
                                                <input type="file" name="file" id="file">
                                            </td>
                                            <td><input type="submit" name="enviar" id="enviar" value="ENVIAR ARQUIVO"></td>
                                        </form>  
                                    </td>
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