<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Installation of this Project

> Simplest and should work for most cases, first run the below command and it might not complete the setup, due to changes required in .env. Editing .env with your proper relational-db connection and re-run the below command will work

```bash
composer run setup
```

### Manual Process of installation
> For those who understands what actually happens during startup of laravel project

```bash
composer install # or 'composer update'
cp .env.example .env
php artisan key:generate
```

> Configure .env file to change DB_PASSWORD and DB_USERNAME for setting db connection according to your existing database.
> Like, if your mariadb's username is 'root' and password is 'password',
then, possible working configuration for database in .env would be:

```bash
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_termux
DB_USERNAME=root
DB_PASSWORD=password
```

after Configuration, run:

```bash
php artisan migrate
npm install
npm run build
```

## Start Development Server

```bash
composer run dev # It's also starts vite server
```
> `php artisan serve` is not recommended here, because we are using tailwind css and alpine.js, so we need vite for development purpose
