
<?php
    session_start();
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $perfil = $_POST["perfil"];
    $entrar = $_POST["entrar"];

    require_once 'connect.php';

    if (isset($entrar)) {
        $verifica = mysqli_query($conn, "SELECT * FROM contas WHERE usuario = '$usuario' AND senha = '$senha' AND perfil = '$perfil'") or die("erro ao selecionar");

        if (mysqli_num_rows($verifica) <= 0) {
            echo "TENTE NOVAMENTE!";
            echo"USUÁRIO OU SENHA <font color=\"red\">INCORRETOS</font>";
            header("refresh:2;url=index.php");
            die();
        } else {
            setcookie("usuario",$usuario);
            if ($perfil == "empresa") {
                $_SESSION['login_empresa'] = TRUE;
                setcookie('cnpj', mysqli_fetch_row(mysqli_query($conn, "SELECT cnpj FROM empresas WHERE usuario = '$usuario' AND senha = '$senha'"))[0]);
                header("refresh:1;url=menu_empresa.php");
            } else {
                if ($perfil == "escola") {
                    $_SESSION['login_escola'] = TRUE;
                    header("refresh:1;url=menu_escola.php");
                } else {
                    if ($perfil =="aluno") {
                        $_SESSION['login_aluno'] = TRUE;
                        header("refresh:1,url=menu_aluno.php");
                    } else {
                        if ($perfil == "ex_aluno") {
                            $_SESSION['login_exaluno'] = TRUE;
                            header("refresh:1;url=menu_aluno.php");
                        }
                    }
                }
            }
        }
    }
?>