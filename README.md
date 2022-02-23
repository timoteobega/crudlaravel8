# CRUD com Laravel 8

Este projeto demonstra a implementação de um <b>CRUD (Create, Read, Update e Delete)</b> de uma mini aplicação em Laravel 8.
A estrutura de dados é composta pelas entidades <b>users</b> e <b>books</b> relacionadas entre si. Cada usuário pode ser o autor de um ou mais livros.


### 📋 Pré-requisitos

São pré-requisitos para implantar essa aplicação:
1. [GIT](https://git-scm.com/downloads) - para clonar o repositório de fontes
2. [PHP 7.4](https:/php.net) - linguagem de programação
3. [Composer](https://getcomposer.org/download/) - para instalar as dependências do projeto
4. [Laravel 8](https://laravel.com/docs/8.x) - framework de desenvolvimento de aplicações web
5. [Bootstrap 5](https://getbootstrap.com/) - framework de desenvolvimento de aplicações web
6. [Apache](https://www.apachefriends.org/pt_br/index.html) - servidor web sugerido para expor a API
7. [MariaDB](https://mariadb.org/download) - banco de dados da aplicação

### 🔧 Implantação

Após devidamente instalados os pré-requisitos acima citados, siga o passo-a-passo para implantar a aplicação

MySQL
```
# Criar um banco de dados
$ CREATE DATABASE crudlaravel8;

# Criar o usuário empiricus
$ CREATE USER 'crudlaravel8'@'localhost' IDENTIFIED BY 'crudlaravel8';

# Conceder privilégios
GRANT ALL PRIVILEGES ON crudlaravel8.* TO 'crudlaravel8'@'localhost';
FLUSH PRIVILEGES;
```

Instalação
```
# Clone o repositório
$ git clone https://github.com/timoteobega/crudlaravel8.git

# Entre no diretório do projeto
$ cd crudlaravel8

# Instalando as depedências do projeto
$ composer install

# Rode as migrações
$ php artisan migrate --seed

# Execute a aplicação localmente
$ php artisan serve

# Acesse a aplicação pelo navegador web
$ http://localhost:8000/crudlaravel8
```
Se necessário defina as configurações de acesso ao banco de dados no arquivo .env da aplicação.

## ⚙️Executando a aplicação

No navegador de internet de sua preferência acessa o endereço da aplicação. <b>Enjoy!<b>

## ✒️ Autor
**Timóteo Bega** - [LinkedIn](https://www.linkedin.com/in/timoteobega/)
