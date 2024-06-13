<?php
    session_start();
    if(isset($_SESSION['login_escola']) && $_SESSION['login_escola'] === TRUE){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <title>CADASTRO DE EMPRESA</title>
            <link rel="stylesheet" href="Pasta_css/cadastro.css">
        </head>

        <body>
            <div class="topo">
                <div class="tarja">
                    <img src="Imagens/tarja.jpg" alt="error" width="110.1%" height="75%">
                </div>
                <div class="logo">
                    <img src="Imagens/nav.jpg" alt="error" width="100%" height="200px">
                </div>
            </div>

            <div class="b_menu">
                <a href="menu_escola.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>
            
            <center>
                <h1>CADASTRAR EMPRESA</h1>

                <div class="box-user">
                    <form method="POST" action="cadastro.php" class="form">
                        <div class="form_cad">
                            <label><i class='bx bx-id-card'></i> CNPJ: </label> <input type="text" name="cnpj" id="cnpj" placeholder="(SOMENTE NÚMEROS)" required> <br><br>
                            <label><i class='bx bx-buildings'></i> EMPRESA: </label> <input type="text" name="nome" id="nome" placeholder="EX: SENAI MG" required> <br><br>
                            <label><i class='bx bx-phone'></i> TELEFONE: </label> <input type="tel" name="telefone" id="telefone" placeholder="EX: (32)999999999" required> <br><br>
                            <label><i class='bx bxl-gmail'></i> EMAIL: </label> <input type="email" name="email" id="email" placeholder="EX:senaimg@gmail.com" required> <br><br>
                            <label><i class='bx bx-male-female'></i> USUÁRIO: </label> <input type="text" name="usuario" id="usuario" required> <br><br>
                            <label><i class='bx bx-lock-alt'></i> SENHA: </label> <input type="password" name="senha" id="senha" required> <br><br>
                        </div>
                        <br>
                        <div class="enviar">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </center>

            <script>
                const mainForm = document.querySelector('.form')
                mainForm.addEventListener('input',(e) => {
                    const element = e.target

                    if(element.id ==='cnpj'){
                        element.value = element.value.replaceAll('.', "")
                        element.value = element.value.replaceAll('/', "")
                        element.value = element.value.replaceAll('-', "")
                        if(isNaN(element.value[element.value.length-1])){
                            element.value = element.value.slice(0,element.value.length-1)
                        }
                    }
                })
            </script>

        </body>
        </html>
<?php
    }else{
        header("location:index.php");
}
?>