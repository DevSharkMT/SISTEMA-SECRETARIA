
<?php
    if(isset($_POST['enviar'])){
        $cnpj = $_POST['cnpj'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
        $arquivo = $_FILES['file'];
        $arquivoN = explode('.',$arquivo['name']);
    
        if($arquivoN[sizeof($arquivoN)-1] != 'pdf'){
            die('ERRO AO FAZER O UPLOAD');
        }else{
            require 'connect.php';
            $dir = "Empresas/$cnpj/frequencia_$mes-$ano.pdf";
            move_uploaded_file($arquivo['tmp_name'], $dir);
            mysqli_query($conn, "INSERT INTO relatorios (mes, ano, local_arquivo, empresas_cnpj) VALUES ('$mes','$ano','$dir', '$cnpj')");
            echo 'UPLOAD FEITO COM SUCESSO';
            header("refresh:2;url=listar.php");
        }
    }
?>
