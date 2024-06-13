<?php
    session_start();
    if(isset($_SESSION['login_empresa']) && $_SESSION['login_empresa'] === TRUE){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link rel="stylesheet" href="Pasta_css/menu_empresa.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <title>MENU EMPRESA</title>
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

            <div class="sair">
                    <a href="index.php" onclick="return confirm('Tem certeza que deseja SAIR?')">
                        <button>SAIR</button>
                    </a>
                </div>

            <div class="bv">
                <?php
                    require_once 'cookie.php';
                ?>
            </div>
            <br>

            <center>
                <table>
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">MÊS</th>
                        <th scope="col">ANO</th>
                        <th scope="col">RELATÓRIO</th>
                        </tr>
                    </thead>

                <?php
                    require_once 'connect.php';
                    $sql_query = "SELECT * FROM relatorios WHERE empresas_cnpj = '" . $_COOKIE['cnpj'] . "'";
                    if ($result = $conn ->query($sql_query)) {
                        while ($row = $result->fetch_assoc()) {
                            // $cnpj = $row['cnpj'];
                            $id = $row['id'];
                            $mes = $row['mes'];
                            $ano = $row['ano'];
                            $local_arquivo = $row['local_arquivo']
                    
                ?>
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $mes; ?></td>
                        <td><?php echo $ano; ?></td>
                        <td class="baixar"><a href="<?php echo $local_arquivo; ?>" style="text-decoration: none; color: #04549c;" download><i class='bx bxs-download'></i></a></td>
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