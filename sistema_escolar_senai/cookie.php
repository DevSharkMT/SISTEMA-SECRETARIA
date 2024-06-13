<?php
    @$usuario_cookie = $_COOKIE["usuario"];
    if(isset($usuario_cookie)){
        echo"Bem-Vindo, $usuario_cookie <br>";
        echo"<br>Essas são as opções <font color=\"BLUE\">DISPONÍVEIS</font> para você";
    }
?>