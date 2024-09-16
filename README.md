# REQUISITOS DE INFRAESTRUTURA
* XAMPP: https://www.apachefriends.org/pt_br/index.html
* SQL WORKBENCH: https://dev.mysql.com/downloads/workbench/

# INFORMAÇÕES SOBRE CÓDIGO
* Linguagem Utilizada: [PHP](https://www.php.net)
* Linguagem de Marcação: [CSS](https://www.w3schools.com/css/) , [HTML](https://www.w3schools.com/html/)
* Banco de Dados: [MYSQL](https://dev.mysql.com/doc/)
* Sistema de Login.
* Sistema Crud.

# BANCO DE DADOS
> Após baixar o `XAMPP` inicie o **Apache** e o **MySQL**, depois selecione o **Admin** do MySQL para entrar no `PhpMyAdmin` <br>
* Ao entrar no PhpMYAdmin, crie um novo banco de dados com o nome do arquivo:
 ```
sistema_secretaria
```
* Após criar o banco de dados, seleciona a opção `IMPORTAR` e selecione o arquivo `.sql` acima <br>
![exemplo](https://github.com/DevSharkMT/SISTEMA-SECRETARIA/assets/155767351/623a427d-9c78-424f-a78f-fd6f6bd9a104)
* As tabelas serão importadas automaticamentes.
* Selecione a pasta `xampp` dentro do explorador de arquivos e coloque o código na pasta `htdocs`

# DEMANDA
A unidade SENAI está necessitando de uma demanda para auxiliar as empresas que possuem alunos com contrato de aprendizagem a monitorar a frequência destes alunos. Tal ação hoje é feita enviando um e-mail para cada empresa individualmente, o que demanda muito tempo.
Seu objetivo é desenvolver uma solução em PHP que seja capaz o cadastro de cada empresa para que ela tenha o acesso a um arquivo gerado pela secretaria e este seja acessado por cada empresa de forma individual. Quem envia o arquivo para o sistema
é asecretaria da escola e a empresa acessa posteriormente este arquivo para poder gerar a folha de pagamento. Por questões de segurança cada empresa tem um único colaborador que acessa este arquivo e consulta as informações e para a secretaria da
escola, são 2 funcionários com acessos distintos, porém com as mesmas funções de entrar no cadastro de cada empresa e enviar o arquivo gerado referente ao mês atual e para cada empresa. Juntamente com esse sistema, os alunos e ex-alunos deverão ter um login, para que consigam enviar justificativas de falta e solicitações de documento para a secretaria.

#  LEVANTAMENTO DE REQUISITOS
*  Sistema de Login para empresa, secretaria, alunos e ex-alunos;
*  Pasta com CNPJ da empresa, contendo os relatórios;
*  Pasta com CPF dos alunos, contendo o envio de justificativas;
*  Mesma tela para alunos e ex-alunos, porém, ex-alunos não deverão conseguir enviar justificativas de faltas;
*  A secretaria deve conseguir ter controle total sobre as informações das empresas e dos alunos, seguindo os seguintes parâmetros:
   - `EMPRESAS`: cadastrar, listar todas as empresas no banco de dados, pesquisar a parte por CNPJ, enviar e visualizar os relatórios, excluir a empresa e umrelatório caso necessário.
     - `ALUNOS`: listar todos os alunos no banco de dados, pesquisar a parte por CPF, editar perfil (nome, telefone, email, cep, curso, perfil), enviar os boletos de solicitações, alterar status do pedido, visualizar as informações de justificativa de falta e baixar o arquivo enviado pelo aluno.
* Os alunos devem ter uma aba de cadastro na página principal do sistema;
* Os alunos deverão conseguir enviar justificativas de faltas e solicitações de documentos e ver suas solicitações pendentes e concluídos;
* Ex-alunos só deverão conseguir solicitar documentos e ver suas solicitações
 pendentes e concluídas;
* Front-End deverá seguir o padrão de cores do SENAI, possuindo a logo da instituição, ficando a critério a utilização de BootStrap ou CSS/JavaScript;
* Interface deve ser amigável e simples;

# MODELO
![exemplo_2](https://github.com/DevSharkMT/SISTEMA-SECRETARIA/assets/155767351/7fb49f30-d267-4dc7-9465-e720589dd3fd)

# INFORMAÇÕES ADICIONAIS

* Dicionário de Dados e Manual de Telas: [Dicionário de Dados.pdf](https://github.com/user-attachments/files/15829534/Dicionario.de.Dados.pdf)
*  O tempo de desenvolvimento do sistema, foi de aproximadamente 25 dias, contando 4 horas por dia. Por ter sido meu primeiro projeto com demanda mais próxima possível de uma situação real, o tempo foi mais longo, devido a novos aprendizados e correções de erros.
