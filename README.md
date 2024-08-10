# Sobre a Aplicação Todo List

## Visão Geral

A aplicação Todo List é uma solução simples e eficiente para gerenciar tarefas e compromissos diários. Desenvolvida utilizando o framework Laravel, esta aplicação oferece uma interface intuitiva para adicionar, visualizar, editar, excluir e alterar o status das tarefas.

## Funcionalidades

- **Adicionar Tarefas**: Crie novas tarefas fornecendo um título e uma descrição opcional. As tarefas serão armazenadas no banco de dados e exibidas na lista principal.
- **Visualizar Tarefas**: Veja todas as suas tarefas em uma lista organizada. Cada tarefa exibe seu título e permite acessar ações adicionais, como editar ou excluir.
- **Editar Tarefas**: Atualize o título e a descrição das suas tarefas a qualquer momento. As alterações são salvas e refletidas na lista de tarefas.
- **Excluir Tarefas**: Remova tarefas que não são mais necessárias.
- **Alterar o Status das Tarefas**: Altere o status das tarefas para marcá-las como concluídas ou não concluídas.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP que fornece uma estrutura robusta para o desenvolvimento de aplicações web.
- **PHP**: Linguagem de programação server-side utilizada para criar a lógica da aplicação.
- **MySQL**: Sistema de gerenciamento de banco de dados utilizado para armazenar as informações das tarefas.
- **Blade**: Motor de templates do Laravel, usado para criar as views da aplicação de forma dinâmica e eficiente.

## Estrutura do Projeto

A aplicação segue a arquitetura padrão do Laravel, que inclui:

- **Models**: Representa a estrutura das tarefas e interage com o banco de dados. O modelo `Todo` gerencia a criação, leitura, atualização e exclusão de tarefas.
- **Controllers**: Controla a lógica de negócios da aplicação. O `TodoController` lida com as operações CRUD e direciona o fluxo entre o modelo e as views.
- **Views**: As páginas da aplicação, escritas com Blade, que são exibidas ao usuário e permitem interação com a lista de tarefas.
- **Routes**: Define as URLs e mapeia as requisições para os métodos apropriados no controlador.

## Acesso Local

- Para acessar o projeto localmente: 
    1. Clonar o projeto através do git.
        1. Executar o seguinte comando no terminal no diretório de preferência: git clone https://github.com/WanCarvalho/todo-app-laravel.git 
    1. Criar um banco de dados MySQL através de linha de comando no terminal, ou em um gerenciador de banco de dados.
    1. Alterar o arquivo .env.example para .env
    1. Alterar as variáveis do banco de dados no arquivo .env (Segue os campos necessários):
        - DB_CONNECTION=mysql
        - DB_HOST=127.0.0.1
        - DB_PORT=3306
        - DB_DATABASE=todo-app-laravel
        - DB_USERNAME=root
        - DB_PASSWORD=
    1. Executar comando ```php artisan migrate``` para rodar as migrations no banco de dados.
    1. Executar comando ```php artisan serve``` no terminal do diretório do projeto.
    1. Acessar o link fornecido (geralmente é: http://127.0.0.1:8000) em um navegador de sua preferência.
