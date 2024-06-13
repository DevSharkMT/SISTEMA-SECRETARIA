<?php
    session_start();
    if(isset($_SESSION['login_aluno']) && $_SESSION['login_aluno'] === TRUE || (isset($_SESSION['login_exaluno']) && $_SESSION['login_exaluno'] === TRUE)){
?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="imagex/png" href="Imagens/icon.ico">
            <link rel="stylesheet" href="Pasta_css/solicita.css">
            <title>Document</title>
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

            <div class="back">
                <a href="menu_aluno.php">
                    <button>VOLTAR AO MENU</button>
                </a>
            </div>

            <center>
                <H1>SOLICITAÇÃO DE DOCUMENTOS</H1>

                <form method="POST" action="arq_solicitacao.php" enctype="multipart/form-data" class="form"> 
                    <div class="box-user_2"> 
                        <h3> INFORME O CPF: </h3>
                        <input type="text" name="cpf" id="cpf" required> <br>
                    </div>

                    <div class="box-user_3"> 
                        <h3>QUAL A MODALIDADE DO CURSO?</h3>
                        <select name="modalidade" id="modalidade"  required>
                            <option value="Aperfeiçoamento Profissional">Aperfeiçoamento Profissional</option>
                            <option value="Aprendizagem Industrial">Aprendizagem Industrial</option>
                            <option value="Curso Técnico">Curso Técnico</option>
                            <option value="Qualificação Profissional">Qualificação Profissional</option>
                            <option value="Iniciação Profissional">Iniciação Profissional</option>
                        </select>
                    </div>

                    <div class="box-user_4"> 
                        <h3>QUAL DOCUMENTO DESEJA SOLICITAR?</h3>

                        <input type="radio" name="solicitacao" value="Histórico Parcial"> Histórico Parcial - R$ 15,00 <br>
                        <input type="radio" name="solicitacao" value="Declaração de Transferência"> Declaração de Transferência - R$ 15,00 <br>
                        <input type="radio" name="solicitacao" value="Ementa Escolar"> Ementa Escolar - R$ 20,00 por disciplina com teto máximo de R$ 100,00 <br>
                        <input type="radio" name="solicitacao" value="Declaração de matrícula"> Declaração de matrícula - Gratuito <br>
                        <input type="radio" name="solicitacao" value="Carta de apresentação para estágio"> Carta de apresentação para estágio optativo - Gratuito <br>
                        <input type="radio" name="solicitacao" value="2ª via de carteirinha estudantil"> 2ª via de carteirinha estudantil - R$ 10,00 <br>
                        <input type="radio" name="solicitacao" value="Recuperação"> Recuperação - R$ 10,00 <br>
                    </div>

                    <h3>OBSERVAÇÕES</h3>
                    <textarea name="observacoes" cols="30" rows="8"></textarea>

                    <br>

                    <div class="enviar">
                        <input type="submit">
                    </div>
                </form>
            </center>

        </body>
        </html>
<?php
    } else {
        header("location:index.php");
}
?>