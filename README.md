# Instalação #
Download do código fonte
Para utilizar este código, faça o clone utilizando o Git. Para isso, execute o comando:


```
git clone https://github.com/sjafete/laravel_11.git

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
## Atualizar a Tradução para Prtugues Brasil 

Dentro do arquivo .env altera os seguintes campos:
```
APP_LOCALE=pt_br
APP_FALLBACK_LOCALE=pt_br
```

## Alterar o Fuso Horario de Africa/Angola

Modificar no arquivo .env o valor da variavel `APP_TIMEZONE` para `Africa/Luanda`

## Configuração de Redifinição da Senha

🔹 Passo 1 - Baixar o MailHog
```
1. Vá para a página de releases do MailHog:
👉 https://github.com/mailhog/MailHog/releases

2. Baixe o executável para Windows (ex: MailHog_windows_amd64.exe)

3. Renomeie o arquivo para MailHog.exe (opcional, mas mais simples).

4. Coloque o arquivo em uma pasta acessível, como C:\MailHog.
```

🔹 Passo 2 - Rodar o MailHog
```
1. Abra o Prompt de Comando (ou PowerShell).

2. Navegue até a pasta onde está o MailHog.exe e executa esse programa

O MailHog agora estará escutando:

SMTP na porta 1025

Interface web em: http://localhost:8025

```

🔹 Passo 3: Configurar sua aplicação
Configure o host SMTP para:
```
Host: localhost

Porta: 1025

Exemplo (Laravel – .env):
env
Copiar
Editar
MAIL_MAILER=smtp
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="no-reply@twdangola.com"
MAIL_FROM_NAME="${APP_NAME}"
```

🔹 Passo 4: Ver os e-mails
Abra no navegador:
👉 http://localhost:8025

Você verá a interface do MailHog com os e-mails capturados.
____________________________________
