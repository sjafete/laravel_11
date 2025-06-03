# Instalação #
Download do código fonte
Para utilizar este código, faça o clone utilizando o Git. Para isso, execute o comando:


```
git clone https://github.com/gordindeoculos/laravel11.git

```

# Laravel 11 - Pacote de Autenticação Laravel/UI

Este projeto já está com a autenticação por login, redefinição de senha e idioma português brasileiro (PT-BR) configurados.

## Pré Requisitos

**Certifique que tenha esses programas instalados no computador**

- Git versão 2.4 ou superior 
- PHP versão 8.2 ou 8.3
- Composer versão 2.7 ou superior
- Nodejs versão 20.1 ou superior

**Habilitar as extensões no arquivo `php.ini`**

```
extension=zip
extension=fileinfo
extension=curl
extension=openssl
extension=gd
extension=mysqli
extension=pdo_mysql
extension=pdo_pgsql
extension=pdo_sqlite
extension=pgsql
extension=sqlite3
extension=mbstring
```

## Instalação

### Download do código fonte

Para utilizar este código, faça o clone utilizando o Git. Para isso, execute o comando:

```
git clone https://github.com/gordindeoculos/laravel11.git
```

### Instalação das Dependências e Configuração do Ambiente de Desenvolvimento

Como foi feito o clone do projeto Laravel a partir do GitHub, é necessário executar os comandos abaixo
para instalar as dependências do projeto e configurar o amebiente de desenvolvimento.

**1. Instalar as dependências listadas no arquivo `composer.json`:**

```
composer install
```

**2. Instalar as dependências listadas no arquivo `package.json`:**

```
npm install
npm run build
```

**3. Copiar o arquivo de ambiente `.env`:**

```
copy .env.exemple1 .env
```

**4. Gerar uma nova chave de aplicativo:**

```
php artisan key:generate
```

**5. Criar o arquivo `database.sqlite` dentro do diretório `database`:**

Clique com o botão direito do mouse sobre a pasta `database`, no menu suspenso clique em `New File` ou `Novo Arquivo` e digite `database.sqlite` como nome do arquivo, em seguida pressione `Enter`.

**6. Executar as migrações do banco de dados:**

```
php artisan migrate
```

**7. Iniciar o servidor de desenvolvimento:**

```
php artisan serve
```

Isso iniciará um servidor local para o seu aplicativo Laravel, normalmente em `http://localhost:8000`.


## Instalar e configurar o pacote Autenticação Laravel/UI ##
  
Para instalar o pacote executa os seguintes comando:
```
- composer require laravel/ui
- php artisan ui vue --auth
- npm install
- npm run build (compila os assets, js etc)
```
____________________________________
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
