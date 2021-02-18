# Conectando_PDO_e_mysqli
Tutorial de Conexão com Banco de Dados + PHP (PDO) Orientação a objetos. Conexão com mysqli
__________________________________________________________________________________________
Orientação a objetos
Criando a tabela por código
As tabelas também podem ser criadas, usando a interface visual do PHPMyAdmin, ou criadas a partir da linguagem SQL.
 
Criaremos uma tabela chamada “funcionario” com as seguintes colunas/campos
- "id" – será o identificador do usuário.
-  "nome"
- "email"
-  "endereco"
-  "telefone"

___________________________________________________________________________________________

CREATE TABLE nome_tabela (

	nome_coluna tipo [Restrições],
	nome_coluna tipo [Restrições],
	...
);

____________________________________________________________________________________________

# Extensões para acesso a banco de dados
As três principais extensões que o PHP implementa para a manipulação do banco de dados são:
 
- Mysql
Extensão presente no PHP desde as primeiras versões e, durante muitos anos, a mais usada entre os desenvolvedores. Hoje, seu uso é inviável em projetos por ser obsoleta, ou seja, não é mais suportada a partir do PHP 7.0. Como o próprio nome explicita, essa extensão é focada no acesso ao banco de dados MySQL.
 
- Mysqli
Versão "repaginada" da antiga extensão mysql. Mais rápida, conta com mais funções que ajudam a  implementar a orientação a objetos.
 
- PDO
Versão mais moderna, suporta 12 drivers, permitindo a conexão com diversos banco de dados (Oracle, SQL Server, MySQL, MariaDB, PostgreSQL etc.). Dispõe de uma interface abstrata (camada de abstração) padrão para o uso desses bancos de dados. Logo, se for preciso alterar o banco de dados do projeto, isso pode ser feito sem ter que alterar todo o código do projeto. A PDO é sempre a melhor escolha.
# Realizando conexão com mysqli
Utilizaremos a extensão mysqli para fazer a nossa primeira conexão. A extensão mysqli está disponível nas versões maiores que a 4.1.3 do PHP. Suas principais características são:
 
- Permite a utilização de querys parametrizadas (será explicado em detalhes posteriormente).
- Permite o uso de transações para operações em lote (característica importante, implementada em alguns dos principais bancos de dados, inclusive no MySQL).
- Multiple Statements (capacidade de executar várias instruções SQL de uma vez).
- Pode ser usada de forma procedural ou orientada a objetos.

_______________________________________________________________________________________ 
1. Vamos criar uma base para testes. Seguindo os conceitos anteriores, crie em base de dados “teste” e nesta base uma tabela “funcionario” com os campos indicados. Após, vamos inserir alguns dados para teste. Na aba SQL execute:
- INSERT INTO funcionario (nome, email, endereco, telefone)
  VALUES ('Cristina', 'cristina@gmail.com.br', 'Rua de teste', '(99) 9999-9999');
 
- INSERT INTO funcionario (nome, email, endereco, telefone)
  VALUES ('Maria', 'maria@gmail.com.br', 'Rua de teste', '(99) 9999-9999');
 
- INSERT INTO funcionario (nome, email, endereco, telefone)
  VALUES ('Ricardo', 'ricardo@gmail.com.br', 'Rua de teste', '(99) 9999-9999'
_______________________________________________________________________________________

2. Criar uma pasta com nome de  mysqli e dentro dela um arquivo chamado index.php (código postado);

## Entendendo o Código

// Instancia a classe mysqli passando os dados de conexão
$db = new mysqli('localhost', 'root', '', 'teste');
 
- localhost é um apelido para o IP local 127.0.0.1, que aponta para a máquina que está sendo usada. Ou seja, está sendo realizada a conexão com o MySQL que está rodando na própria máquina.
- root trata-se do nome do usuário do MySQL. Por padrão, este é o usuário configurado na instalação do Xampp. É possível criar diferentes usuários, com diferentes restrições no MySQL, mas isso é assunto para um estudo a parte sobre MySQL.
- O terceiro argumento em branco ' ' trata-se da senha do usuário. Por padrão, no Xampp, a senha configurada para o usuário "root" é em branco, nula.
- O quarto argumento é onde especificamos qual base de dados vamos usar nessa conexão que está sendo estabelecida.
 
Claro, em um servidor Web (em um serviço de hospedagem ou em um servidor dedicado, por exemplo), os dados de conexão não seriam esses (assim se espera!) e, com certeza, o usuário do MySQL teria uma senha.

_______________________________________________________________________________________

# PDO
##Reforçando o PDO:

- Exemplo de como a conexão com o MySQL pode ser feita: 
$con = new PDO("mysql:host=hostname;dbname=databasename", $user, $password);
 
- Como a conexão pode ser feita ao banco de dados PostgreSQL: 
$con = new PDO("pgsql:host=hostname;dbname=databasename;user=username;password=password");
 
Perceba que muda, basicamente, o parâmetro de conexão de mysql:host para pgsql:host.
 
PDO tem completo suporte às querys parametrizadas e certamente ele é a melhor opção de acesso a banco de dados disponível para PHP. A extensão MySQLi também é extremamente robusta, mas entre ela e o PDO, se você puder escolhê-lo, será sempre uma ótima opção. Você pode migrar de uma base de dados para outra sem muitas alterações no seu código fonte PHP, enquanto MySQLi, como o nome já diz, é voltado para banco MySQL.


## Realizando conexão com PDO
Vamos a um exemplo com PDO. 

1. Primeiro, crie uma pasta no htdocs chamada “pdo” e dentro dela um arquivo index.php com o seguinte conteúdo:

