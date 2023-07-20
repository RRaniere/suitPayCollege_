# Projeto SuitPayCollege

Este é um projeto que simula o sistema administrador de uma escola ou faculdade permitindo cadastro de alunos, cursos e matrículas.

## Configuração do Ambiente

Para executar este projeto, você precisará ter os seguintes componentes instalados em seu ambiente de desenvolvimento:

- Docker: https://www.docker.com/get-started
- Docker Compose: https://docs.docker.com/compose/install/

## Instalação

Siga os passos abaixo para configurar e executar o projeto:

1. Clone o repositório para o seu ambiente local:

   git clone https://github.com/RRaniere/suitPayCollege_.git

2. Navegue até o diretório do projeto:

   cd suitPayCollege

3. Copie o arquivo de exemplo de configuração do ambiente:

   cp .env.example .env

4. Edite o arquivo .env e configure as variáveis de ambiente conforme necessário.

5. Inicialize o ambiente com o Laradock:

   cd laradock
   docker-compose up -d nginx postgres

6. Acesse o workspace do laradock:

   docker-compose exec workspace bash

7. Instale as dependências do laravel 

   cd .. 
   cd suitPayCollege 
   composer install 

8. Insira a chave da aplicação 

   php artisan key:generate

9. Execute as migrações do banco de dados:

   php artisan migrate --seed

10. O projeto agora deve estar configurado e em execução. Acesse-o em seu navegador em http://localhost.

## Tecnologias Utilizadas

- Laradock: Ambiente Docker para desenvolvimento PHP. https://laradock.io/
- Laravel: Framework PHP para desenvolvimento web. https://laravel.com/
- Postgres: Banco de dados relacional. https://www.postgresql.org/


