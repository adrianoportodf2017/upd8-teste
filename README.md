# Cadastro de Cliente - Proposta de Desenvolvimento

## Introdução
Este repositório contém um projeto de cadastro de cliente desenvolvido em PHP utilizando o framework Laravel e o banco de dados MySQL. O objetivo deste projeto é demonstrar a criação de um CRUD (Create, Read, Update, Delete) básico, onde a interface do usuário (view) se comunica com os dados por meio de uma API REST.

## Passo a Passo de Configuração

### 1. Pré-requisitos
Antes de iniciar a configuração do projeto, certifique-se de que você possui os seguintes itens instalados em seu ambiente de desenvolvimento:

- PHP (versão 7.4 ou superior)
- Composer (gerenciador de pacotes do PHP)
- Laravel (versão 8.x)
- MySQL (servidor de banco de dados)

### 2. Configuração do Laravel

#### 1. Clone o repositório para o seu ambiente local:
   
git clone https://github.com/adrianoportodf2017/upd8-teste.git

#### 2. Acesse o diretório do projeto:

cd upd8-teste

#### 3. Instale as dependências do projeto utilizando o Composer:

composer install

#### 4. Crie o arquivo `.env` com base no arquivo `.env.example`:

cp .env.example .env

#### 5. Configure o arquivo `.env` com as informações do seu ambiente, incluindo as configurações de conexão com o banco de dados.

#### 6.Gere a chave de criptografia do aplicativo:

php artisan key:generate

### 3. Configuração do Banco de Dados

 1. Certifique-se de que o servidor de banco de dados MySQL está em execução.

 2. Crie um banco de dados vazio com o nome desejado (por exemplo, `cadastro_cliente`).

### 4. Migrações e Seeders

#### 1. Execute as migrações do Laravel para criar as tabelas necessárias no banco de dados:

php artisan migrate

#### 2. Execute os seeders para popular o banco de dados com dados de exemplo:

php artisan db:seed

### 5. Iniciar o Servidor

#### 1. Inicie o servidor de desenvolvimento do Laravel:

php artisan serve

#### 2. O servidor será iniciado na URL `http://localhost:8000`. Acesse essa URL em seu navegador para visualizar o projeto.

Pronto! Agora você pode cadastrar, visualizar, atualizar e excluir clientes por meio da interface do usuário.
