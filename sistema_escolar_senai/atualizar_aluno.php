<?php
    require_once "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $e_mail = $_POST["e_mail"];
        $cep = $_POST["cep"];
        $curso = $_POST["curso"];
        $perfil = $_POST["perfil"];
    
        if($nome != "" && $telefone != "" && $e_mail != "" && $cep !="" && $curso != "" && $perfil != ""){
            $sql = "UPDATE alunos SET nome = '$nome', telefone = '$telefone', e_mail = '$e_mail', cep = '$cep', curso = '$curso', perfil = '$perfil' WHERE usuario = '$usuario'";
            $sql_2 = "UPDATE contas SET  perfil = '$perfil' WHERE usuario = $usuario";
    
            if ($conn->query($sql) === TRUE) {
                ($conn -> query($sql_2) === TRUE);
                echo "ALUNO ATUALIZADO COM SUCESSO!";
                header("refresh:0;url=controle_aluno.php");
            } else {
                echo "TODOS OS CAMPOS DEVEM SER PREENCHIDOS!";
                header("refresh:2;url=editarr_aluno.php");
            }
        }
    }
    $conn->close();
?>