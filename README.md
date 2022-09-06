## Descrição do projeto

Uma interface web que aceita upload de arquivos em txt com dados de compras para armazenar no banco de dados,


Tecnologias adotadas: PHP, Doctrine ORM, MySql, Bootstrap, Arquitetura MVC e Dotenv.

### Deployment da aplicação

Para configurar o projeto tem que executar os comandos do composer para baixar as dependências.


```` 
composer install
````
ou
```` 
composer update
````
No projeto foi usado o Doctrine ORM para mapear a entidade de compra e facilitar o uso com o banco de dados. 
Foi usado também o pacote do DotEnv para mapear as variáveis de ambiente.


Para a conexão com o banco de dados, basta renomear o arquivo .envexemplo com as informações do banco de dados.

O Doctrine possibilita a criação da tabela automaticamente lendo a entidade mapeada, basta que a base de dados já tenha sido criada. A mesma informada na variável DBNAME.

Para executar o comando basta digitar:

```` 
php vendor\bin\doctrine orm:schema-tool:create
````

Outra opção é criar a tabela manualemete:
````sql
CREATE TABLE Compra (
    id INT AUTO_INCREMENT NOT NULL, 
    comprador VARCHAR(255) NOT NULL, 
    descricao VARCHAR(255) NOT NULL, 
    precoUnit DOUBLE PRECISION NOT NULL, 
    qtd INT NOT NULL, 
    endereco VARCHAR(255) NOT NULL, 
    fornecedor VARCHAR(255) NOT NULL, 
    PRIMARY KEY(id)) 
    DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci`  
   ENGINE = InnoDB 
````
Finalmente, para executar o projeto você pode usar o servidor nativo do PHP apontando para o front controller da pasta public/

```` 
php -S localhost:8080 -t public
````
