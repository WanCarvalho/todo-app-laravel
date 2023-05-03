# Orientações da Aplicação ToDo

## Assim que baixar o projeto executar os seguintes comandos no terminal, utilizando o caminho do gerenciador de arquivos onde a pasta do projeto se encontra.

# Passos para iniciar projeto na máquina local

1- Neste projeto optei por utilizar o Banco de Dados padrão 'postgres' do PostgreSQL 15 para facilitar no funcionamento da aplicação em outros ambientes locais que não fossem a minha máquina pessoal.

2- Acessando o diretório do projeto pelo terminal utilizar comando para instalar dependências do Laravel via Composer: ``` composer install ```

3- Logo depois gerar chave com: ``` php artisan key:generate ```

- Antes de executar o próximo comando configurar arquivo .env com as informações do banco de dados local. No meu caso criei o Usuário padrão: postgres e Senha: admin, mas podem ser alterados conforme eles foram criados na sua máquina local, assim como as outras informações.

## Minhas configurações do arquivo .env

DB_CONNECTION=pgsql

DB_HOST=localhost

DB_PORT=5432

DB_DATABASE=postgres

DB_USERNAME=postgres

DB_PASSWORD=admin


4- Acessar diretório do projeto e utilizar comando para migrar estruturas de tabelas para o banco de dados: ``` php artisan migrate ```

# Passos que utilizei para desenvolvimento da aplicação ToDo

1- Instalação do PHP 8.0.26.

2- Instalação do PostgreSQL 15.

3- Instalação e criação do projeto Laravel com Composer.

4- Instalação do PostgreSQL e realização das configurações do banco.

5- Criação do banco de dados e tabela tarefas no PostgreSQL.

6- Início do desenvolvimento da aplicação utilizando o padrão MVC.

7- Configurações do arquivo php.conf:

- Descomentar linha com ‘extension=openssl’. Pode ocorrer erro para iniciar o servidor incorporado caso essa linha não seja descomentada.
- Descomentar linha com ‘extension=pdo_pgsql’. Extensão necessária para integração com o banco de dados PostgreSQL.

8- Finalização do projeto e alocação do projeto no repositório do GitHub


# Formas de rodar o projeto localmente

## Usar servidor incorporado do PHP

Acessar o diretório do projeto via CMD e utilizar o comando: `php -S localhost:8000 -t public`.

## Usar servidor incorporado do Laravel

Acessar o diretório do projeto via CMD e utilizar o comando: `php artisan serve`.

# Itens da avaliação

A. Criar uma aplicação web utilizando PHP usando o Framework Laravel - **Feito**

B. Utilizar persistência em um banco de dados Postegres SQL - **Feito**

C. Utilizar Eloquent ORM - **Feito**

D. Utilizar Bootstrap - **Feito**

E. Utilizar Jquery UI - **Feito**

F. Utilizar Teste Unitários com PHPUnit

G. Criar single page app utilizando VueJS ou Angular

H. Publicar projeto em um Servidor WEB na internet

I. Criar aplicativo mobile utilizando Flutter