# **Laravel**

- Framework PHP open-source criado por Taylor B. Otwel
- Utilizam o padrão MVC (model, view, controller)
- Principal framework de projetos PHP no GitHub
- Versão Atual 8.X (Gravação das aulas)


## Site
https://laravel.com

## Documentação
http://laravel.com/docs

## Instalação
### Via Composer
Via CMD dê o comando: 
> composer create-project laravel/laravel example-app

Depois de instalado faça o acesso a pasta do Laravel utilizando o cd + "nome do projeto"

## Start

Para realizar o start do projeto dê o comando:
> php artisan serve

Provavelmente ele vai utilizar a porta 8000 do seu servidor local.

### Views
As páginas propriamente ditas ficam dentro de resources/views

#### Criando uma nova página

Após criar uma nova "view", iremos criar uma nova rota para ela dentro do arquivo web.php dentro da pasta routes utilize o código:

> Route::get('/login', function () {    return view('login');});