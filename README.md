<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Para instalar

```bash
# clone o repositorio com
$ git clone https://github.com/Wil-Rs/agendamento-particular.git

# entre no pasta que será criada
# depois de entrar usar os commandos
$ composer install
$ npm i
$ npm run dev

# quando você deve renomear a orquivo .env.example para .env
# depois fazer a configurações do banco de dados

# depois de configurado o banco de dados roda os seeders 
# com o comando
$ php artisan db:seed
# depois de terminado os seeders rode o servidor

# para rodar o servidor use o comando
$ php artisan serve
# ele ira mostra um link e basta abrir o navegador e e digitar
# ou segurar CTRL e clicar em cima quee também irá abrir
# o navegador
```

# Api
```bash
# para registar um user/medico
=> /api/auth/registro
# com os atriburos
{
    "name": "seu nome",
    "email": "seu email",
    "password": "sua senha",
    "password_confirmation": "confirme sua senha"
} 

# para logar 
=> /api/auth/login
# com os atriburos
{
    "email": "seu email",
    "password": "sua senha"
}
# se ocorrer tudo bem você recebera um token

# para logout 
=> /api/auth/logout

# para retornar os agendamentos
=> /api/agendamentos
# para usar essa porta não esqueça de usar o header com
# Authorization  dois Bearer SEUTOKEN

```

### OBSERVAÇOES
não usei docker :(