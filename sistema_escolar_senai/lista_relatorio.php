<?php
    session_start();
    if(isset($_SESSION['login_escola']) && $_SESSION['login_escola'] === TRUE){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="Pasta_css/relatorio.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <title>MENU EMPRESA</title>
        </head>
        <body>

            <?php
                require_once "connect.php";
                $cnpj = $_POST["cnpj"];
                setcookie('cnpj', $cnpj);
            ?>

            <div class="topo">
                <div class="tarja">
                    <img src="Imagens/tarja.jpg" alt="error" width="100%" height="150px">
                </div>
                <div class="logo">
                    <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
                </div>
            </div>

            <div class="back">
                <a href="listar.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <h1 class="listagem_text">ARQUIVOS DA EMPRESA</h1>

            <br>

            <center>

                <table>
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">MÊS</th>
                        <th scope="col">ANO</th>
                        <th scope="col">RELATÓRIO</th>
                        <th scope="col">EXCLUIR RELATÓRIO</th>
                        </tr>
                    </thead>

                <?php
                    require_once 'connect.php';
                    $sql_query = "SELECT * FROM relatorios WHERE empresas_cnpj = '$cnpj'";
                    if ($result = $conn ->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $mes = $row['mes'];
                            $ano = $row['ano'];
                            $local_arquivo = $row['local_arquivo']
                    
                ?>
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $mes; ?></td>
                        <td><?php echo $ano; ?></td>
                        <td><?php echo $local_arquivo?></td>
                        <td>
                            <a href="deletar_relatorio.php?cnpj=<?php echo $cnpj; ?>" onclick="return confirm('Tem certeza que deseja deletar o PDF selecionado?')" class="excluir_relatorio" style="color:red; text-decoration:none; font-size:110%; font-weight: 900;">Excluir PDF</a>
                        </td>
                    </tr>

                    <?php
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