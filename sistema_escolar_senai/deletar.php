<?php
    require_once "connect.php";
    $cnpj = $_GET["cnpj"];
    $usuario = $_GET["usuario"];
    $query = "DELETE FROM relatorios WHERE empresas_cnpj = '$cnpj'";
    $query_2 = "DELETE FROM empresas where cnpj = '$cnpj'";
    $query_3 = "DELETE FROM contas where usuario = '$usuario'";

    if (mysqli_query($conn, $query)) {
        (mysqli_query($conn, $query_2));
        (mysqli_query($conn, $query_3));
        echo "EMPRESA EXCLUÍDA COM SUCESSO!";
        header("refresh:2;url=listar.php");
    } else {
        echo "ERRO AO EXCLUIR A EMPRESA!";
        header("refresh:2;url=menu_escola.php");
    }
?>