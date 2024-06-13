
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Pasta_css/cadastro_aluno_pagina.css">
    <title>CADASTRO DE ALUNO</title>
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
        <a href="menu_escola.php">
            <button>VOLTAR AO MENU</button>
        </a>
    </div>

    <br>

    <center>
        <h1>FAÇA SEU CADASTRO</h1>

        <br><br><br>

        <form method="POST" action="cadastro_aluno.php" class="form">
            <div class="box_user">
                <div class="form_cad">
                    <label><i class='bx bx-male-female'></i> USUÁRIO: </label> <input type="text" name="usuario" id="usuario" placeholder="CPF" required> <br><br>
                    <label><i class='bx bxs-lock-alt' ></i> SENHA: </label> <input type="password" name="senha" id="senha" required> <br><br>
                    <label><i class='bx bxs-user-pin'></i> NOME: </label> <input type="text" name="nome" id="nome" placeholder="NOME COMPLETO" required> <br><br>
                    <label><i class='bx bx-phone'></i> TELEFONE: </label> <input type="tel" name="telefone" id="telefone" placeholder="SOMENTE NÚMEROS" required> <br><br>
                    <label><i class='bx bxl-gmail'></i> EMAIL: </label> <input type="email" name="email" id="email" placeholder="EX:senaimg@gmail.com" required> <br><br>
                    <label><i class='bx bxs-been-here'></i> ENDEREÇO: </label> <input type="text" name="cep" id="cep" placeholder="CEP E RUA" required> <br><br>
                    <label><i class='bx bxs-book-alt'></i> CURSO: </label> <input type="text" name="curso" id="curso" placeholder="CURSO" required> <br><br>
                </div>
            </div>

            <br>
        
            <div class="enviar">
                <input type="submit">
            </div>
        </form>
    </center>
</body>
</html>
