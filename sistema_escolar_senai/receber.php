
<?php
    require 'connect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cpf = $_POST["cpf"];
        $status = $_POST["status"];
        $arquivo = $_FILES["file"];
        $arquivo2 = explode('.',$arquivo['name']);
        $dir_2 = ('Envios/'.$cpf);
    
        if(!is_dir($dir_2)) {
            mkdir($dir_2, 0777, true);
        } $dir_2 = "Envios/$cpf/arquivo_enviado.pdf";
            move_uploaded_file($arquivo['tmp_name'], $dir_2);
            mysqli_query($conn, "UPDATE solicitacoes SET status = '$status', solicitacao_envio = '$dir_2', obs_secretaria= 'A Retirada do Documento é feita na Instituição. Você Receberá um comunicado via e-mail ou WhatsApp' WHERE cpf = '$cpf'");
            echo 'UPLOAD FEITO COM SUCESSO';
            header("refresh:2;url=solicitacao_pagina.php");    
    }
    $conn->close();
?>

