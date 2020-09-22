<p align="center"><a href="#" target="_blank"><img src="https://painel.avdesign.com.br/img/logo/login-title.png"></a></p>

<p align="center">
<a href="#"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="#"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

### Instalação e configuração  com Docker/docker-compose 
Acesse o terminal linux e clone o projeto com o camando:
````
$ git clone https://github.com/avdesign/desafio-pmk
````
Permissão do usuário no diretório do projeto.
````
$ chown $USER:$USER desafio-pmk
````
Entre na pasta do projeto:
````
$ cd desafio-pmk
````
Instalar as dependências do Laravel
````
$ docker run --rm -v $(pwd):/app composer install
````
Use o docker-compose para instalalar os containers e images: PHP 7.3 /NGINX/MYSQL/PHPMYADMIN
````
$ docker-compose up -d
````
Agora vamos fazer as configurações necessárias dentro do container  `desafio_pmk_app_1`, digite o comando:
````
$ docker exec -it desafio_pmk_app_1 bash
````
Primeiro precisamos criar o arquivo `.env`, com as variáveis ​​de ambiente. Para tornar isso mais fácil, vamos fazer uma cópia idêntica do arquivo `.env.example`
````
# cp .env.example .env 
````
Vamos usar o comando para gerar uma chave, essa chave é o gerador de bytes aleatórios seguro do PHP. Se não criar a chave, todos os valores criptografados pelo Laravel serão inseguros:
````
# php artisan key:generate
````
Para aumentar a velocidade do app, vamos armazenar em cache todos os arquivos de configuração em um único arquivo, usando o comando:
````
# php artisan config:cache
````
Vamos precisar criar permissões nos diretórios dentro do **storage**, e dentro do diretório **bootstrap/cache**
````
# chmod -R 775 storage/*
# chmod -R 775 bootstrap/cache 
````
Por fim vamos adicionar as tabelas e colunas no banco de dados com o comando `php artisan migrate`, e se acrescentar `--seed` o Laravel vai propagar seu banco de dados com dados **fack ou reais**. feito com as classes  **factory e seeder**
 - Se você estiver usando o docker, você deve executar este comando de dentro do docker.
````
# php artisan migrate --seed
````
- [Iniciar o servedor local](http://localhost:8000).
- [Iniciar o phpMyAdmin](http://localhost:8080).








