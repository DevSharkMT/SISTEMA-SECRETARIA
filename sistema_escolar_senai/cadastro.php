<html>
<head>
    <title>CADASTRO DE USUÁRIOS</title>
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
    require_once "connect.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cnpj = $_POST["cnpj"];
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $perfil = "empresa";

        if($cnpj != "" && $nome != "" && $telefone != "" && $email != "" && $usuario != "" && $senha != ""){
            $sql = "INSERT INTO empresas (cnpj, nome, telefone, e_mail, usuario, senha) VALUES ('$cnpj', '$nome', '$telefone', '$email', '$usuario', '$senha')";
            $sql_2 = "INSERT INTO contas (usuario, senha, perfil) VALUES ('$usuario', '$senha', '$perfil')";

            if ($conn->query($sql) == TRUE){
                ($conn->query($sql_2) == TRUE);
                echo"<div class=\"alert alert-success\" role=\"alert\">EMPRESA CADASTRADA COM SUCESSO!</div>";

                $dir = ('Empresas/'.$cnpj);
                if(!is_dir($dir)) {
                    mkdir($dir, 0777, true);
                }else{
                    echo"EMPRESA JA FOI CADASTRADA";
                }
                header("refresh:2;url=menu_escola.php");
            }else{
                echo "ERRO AO CADASTRAR A EMPRESA!";
                header("refresh:2;url=cadastro_pagina.php");
            }
        }
    }
    $conn->close();
?>