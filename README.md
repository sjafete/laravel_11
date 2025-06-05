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
## Atualizar a Tradução para Prtugues Brasil 

Dentro do arquivo .env altera os seguintes campos:
```
APP_LOCALE=pt_br
APP_FALLBACK_LOCALE=pt_br
```

## Alterar o Fuso Horario de Africa/Angola

Modificar no arquivo .env o valor da variavel `APP_TIMEZONE` para `Africa/Luanda`

## Configuração de Redifinição da Senha

### Testar a Redefinição de Senha com o **MailHog**

1. Execute o **MailHog** e acesse `http://localhost:8025`.

2. Acesse a pasta do projeto e execute o servidor web embutido do Laravel:

```bash
php arisan serve
```

3. Acesse `http://localhost:8000` e faça o cadastro de um usuário clicando no link **Cadastrar** ou **Register**.

4. Já com um usuário cadastrado, clique no link para fazer o `Login`, no ***formulário de login*** clique no link `Esqueceu sua senha?`, no ***formulário de solicitação de redefinição de senha***, preencha com o e-mail de um usuário já cadastrado e clique no botão `Enviar Link de Redefinição de Senha`.

5. No **MailHog** acesse a **Caixa de Entrada (Inbox)** e irá ver o e-mail com o assunto **Reset Password Notification**, abra essa mensagem e no botão **Reset Password**, você será redirecionado para o formulário **Redefinir Senha**, altere sua senha e faça o login utilizando a nova senha.

Através deste teste é possível verificar que a **Redefinição de Senha** está ativa e funcionando. Para configurar um e-mail real, será necessário alterar as configurações das variáveis de ambiente `MAIL_*` do `DotEnv (arquivo .env)` de acordo com servidor de e-mail que contratar.

### Personalizar a notificação de Redefinição de Senha

Neste tópico iremos verificar como personalizar a mensagem (notificação) enviada por e-mail ao usuário quando solicitado a redefinição de senha.
____________________________________
