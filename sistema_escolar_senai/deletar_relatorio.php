<?php
    require_once "connect.php";
    $cnpj = $_GET["cnpj"];
    $query = "DELETE FROM relatorios WHERE empresas_cnpj = '$cnpj'";

    if (mysqli_query($conn, $query)) {
        echo "RELATÓRIO EXCLUÍDO COM SUCESSO!";
        header("refresh:2;url=listar.php");
    } else {
        echo "ERRO AO EXCLUIR O RELATÓRIO!";
        header("refresh:2;url=menu_escola.php");
    }
?>