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
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $curso = $_POST["curso"];
        $perfil = "aluno";

        if($usuario != "" && $senha != "" && $nome != "" && $telefone != "" && $email != "" && $cep != "" && $curso != "" && $perfil != ""){
            $sql = "INSERT INTO alunos (usuario, senha, nome, telefone, e_mail, cep, curso, perfil) VALUES ('$usuario', '$senha', '$nome', '$telefone', '$email', '$cep', '$curso', '$perfil')";
            $sql_2 = "INSERT INTO contas (usuario, senha, perfil) VALUES ('$usuario', '$senha', '$perfil')";

            if ($conn->query($sql) == TRUE){
                ($conn->query($sql_2) == TRUE);
                echo"<div class=\"alert alert-success\" role=\"alert\">ALUNO CADASTRADO COM SUCESSO!</div>";
                header("refresh:2;url=menu_aluno.php");
            }else{
                echo "ERRO AO CADASTRAR O ALUNO!";
                header("refresh:2;url=cadastro_aluno_pagina.php");
            }
        }
    }
    $conn->close();
?>