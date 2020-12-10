Programa foram utilizadas as linguagens de programação PHP e Bootstrap.
Como rodar o código:

Primeiro é preciso baixar e instalar o Xampp.
Com o Xampp instalado abrir o xampp-control e na aba actions dar start no Apache e no MySQL.
Na minha máquina os arquivos foram usados na pasta htdocs e dentro da mesma eu criei uma pasta chamada pdo.
Assim o caminho ficou xampp/htdocs/pdo.
Os arquivos foram rodados em localhost, seguindo o caminho anterior ficou " localhost/pdo/index.php ", sendo feito isso irá aparecer na tela o formulário para ser preenchido e assim os dados serão pegos via post.
O banco de dados foi feito no Mysql workbench em localhost com o nome de " root " e sem senha.
Para utilizar o banco de dados correto é necessário criar um scrip sql com o banco chamado " dbBrasilFone ".
Com o banco criado e após o comando " use dbBrasilFone " no arquivo sql, foi criado uma tabela denominada " usuarios " com os campos proposto no teste.
O arquivo logo.png deve permanecer na mesma pasta dos demais arquivos ou seu caminho no arquivo "index.php" deve ser alterado.
Obs:

Caso haja a necessecidade de mudar o nome do banco é só alterar o nome no arquivo "db.php" na linha 3 "dbname: nome do novo banco "
Pode haver também a necessidade por a senha do workbench, no meu caso não foi necessário, mas caso precise na linha 3 do arquivo "db.php" após " "root", trocar as " "" " pela senha do banco.