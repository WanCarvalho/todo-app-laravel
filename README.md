# Orientações da Aplicação ToDo

# Passos para desenvolvimento da aplicação ToDo

1- Instalação do PHP 8.0.26.

2- Instalação do PostgreSQL 15.

3- Instalação e criação do projeto Laravel com Composer.

4- Instalação do PostgreSQL e realização das configurações do banco.

5- Criação do banco de dados e tabela tarefas no PostgreSQL.

6- Início do desenvolvimento da aplicação utilizando o padrão MVC.

7- Configurações do arquivo php.conf:

- Descomentar linha com ‘extension=openssl’. Pode ocorrer erro para iniciar o servidor incorporado caso essa linha não seja descomentada.
- Descomentar linha com ‘extension=pdo_pgsql’. Extensão necessária para integração com o banco de dados PostgreSQL.

# Configurar Banco de Dados da aplicação

- Criar banco de dados com o nome: listaToDo.
- Utilizar o comando ‘Restore’ com o arquivo abaixo (para restaurar estruturas da tabela de tarefas criada para persistência dos dados):

[Arquivo para Restore do banco de dados](https://github.com/WanCarvalho/todo-app-laravel/blob/master/dbTarefas.sql)

- Lembrar de configurar arquivo .env do projeto com o usuário e senha do banco de dados local criado. No meu caso criei o Usuário padrão: postgres e Senha: admin.

## Minhas configurações do arquivo .env

DB_CONNECTION=pgsql

DB_HOST=localhost

DB_PORT=5432

DB_DATABASE=listaToDo

DB_USERNAME=postgres

DB_PASSWORD=admin


# Formas de rodar o projeto localmente

## Usar servidor incorporado do PHP

Acessar o diretório do projeto via CMD e utilizar o comando: `php -S localhost:8000 -t public`

## Usar servidor incorporado do Laravel

Abrir pasta do projeto em uma IDE e rodar o comando `php artisan serve` no terminal.

# Itens da avaliação

A. Criar uma aplicação web utilizando PHP usando o Framework Laravel - Feito

B. Utilizar persistência em um banco de dados Postegres SQL - Feito

C. Utilizar Eloquent ORM - Feito

D. Utilizar Bootstrap - Feito

E. Utilizar Jquery UI - Feito

F. Utilizar Teste Unitários com PHPUnit

G. Criar single page app utilizando VueJS ou Angular

H. Publicar projeto em um Servidor WEB na internet

I. Criar aplicativo mobile utilizando Flutter