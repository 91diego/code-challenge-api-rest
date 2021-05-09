# Code Challenge
## REST API

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

## Features

- Autheticate using JWT.
- Get claims from authenticated user.
- Web Scraping to obtain the links of a page.

## Tech

- [Laravel] - PHP Framework!

## Installation

Rest Api requires [Laravel.com](https://laravel.com/docs/8.x/installation) v8x to run.
Install [Composer.org](https://getcomposer.org/) .

Install all dependencies and plugins.
```sh
composer install
```

Create .env file.

```sh
cp .env.example .env
```

Create SQLite Database.

```sh
touch database/database.sqlite
```

Then, run migrations.

```sh
php artisan migrate
```

Create test user record.

```sh
php artisan db:seed
```

Refresh the project.

```sh
composer dump-autoload
php artisan config:cache
php artisan cache:clear
```

Run server.

```sh
php artisan serve
```
Verify the deployment by navigating to your server address in
your preferred browser.

```sh
127.0.0.1:8000
```

## License

MIT

**Free Software, Hell Yeah!**
