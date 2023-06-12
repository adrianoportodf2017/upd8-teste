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

###1. Clone o repositório para o seu ambiente local:

   ```shell
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
Acesse o diretório do projeto:

   ```shell
cd nome-do-repositorio
Instale as dependências do projeto utilizando o Composer:

   ```shell
composer install
Crie o arquivo .env com base no arquivo .env.example:

   ```shell
cp .env.example .env
Configure o arquivo .env com as informações do seu ambiente, incluindo as configurações de conexão com o banco de dados.

Gere a chave de criptografia do aplicativo:

   ```shell
php artisan key:generate
###3. Configuração do Banco de Dados
Certifique-se de que o servidor de banco de dados MySQL está em execução.

Crie um banco de dados vazio com o nome desejado (por exemplo, cadastro_cliente).

###4. Migrações e Seeders
Execute as migrações do Laravel para criar as tabelas necessárias no banco de dados:

   ```shell
php artisan migrate
Execute os seeders para popular o banco de dados com dados de exemplo:

   ```shell

php artisan db:seed
5. Iniciar o Servidor
Inicie o servidor de desenvolvimento do Laravel:

   ```shell
php artisan serve
O servidor será iniciado na URL http://localhost:8000. Acesse essa URL em seu navegador para visualizar o projeto.

Pronto! Agora você pode cadastrar, visualizar, atualizar e excluir clientes por meio da interface do usuário.

Observação: Certifique-se de que o servidor de banco de dados esteja em execução antes de iniciar o servidor do Laravel. Caso contrário, a aplicação não conseguirá se conectar ao banco de dados.

Conclusão
Este projeto é um exemplo básico de um cadastro de cliente utilizando PHP Laravel e MySQL. Sinta-se à vontade para explorar o código-fonte e fazer melhorias ou personalizações de acordo com suas necessidades.

Se tiver alguma dúvida ou encontrar algum problema durante a configuração ou utilização deste projeto, fique à vontade para abrir uma nova issue neste repositório.

