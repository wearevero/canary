<p align="center">
    <img src="/public/banner.png" />
</p>

# Catalogue

**_We Believe, Every Piece of Jewerly Tells a Radiant Story._**

Veronique open-source catalogue system. 
Using HMVC-ready architecture by default. 


## Motivation

To manage products-related stuff.

## Pre-requisite

To be able to run this project, several supporting tools are needed, such as:

-   Web server i.e: `xampp`, `lampp` or `mampp`
-   Core language: `php ^8.x`
-   JavaScript runtime like: `Node Js`
-   Package manager for php, i.e: `composer`

## Dependency & Built-in scaffolding

1. Laravel UI for manage login & register related thing
2. Laravel Pint for code styling
3. Spatie Laravel health for checking the health in app
4. Tailwindcss for create good-looking interface
5. Laravel scout for handling driver based solution full-text search in eloquent models

## Run development mode

1. Clone this project: `git clone https://github.com/wearevero/catalogue.git`

2. Open **double** `bash` in the `catalogue` directory: one to run node js the other to run composer engine.

3. Install all required php dependencies with the command `composer install` and... wait for the apocalypse, just kidding.

4. On another `bash`, run the command `npm install` to install the dependencies related to the required assets.

5. Generate key `php artisan key:generate`

6. Make database

7. Copying environment example `cp .env.example .env`

8. Running migration `php artisan migrate`

9. Seed default data `php artisan db:seed`

10. Checking the health? `php artisan health:check`

11. Take a look on your browser at: `127.0.0.1:8000`

## Run the testing

For tinkering with testing related-thing, by default this poject is using [Pest php](https://pestphp.com/) library.

For running testing, you can use this command:

```php
php artisn test
```

## Code formatting

We use [Laravel Pint](https://laravel.com/docs/10.x/pint) package for making this code base to more human readability.
You can run with this command:

```php
./vendor/bin/pint
```

## Run for production

1. Install autoloader optimization `composer require --optimize-autoloader`

2. Let's optimize it! `php artisan optimize`

## Code of Conduct

Please review and abide our [Code of Conduct](./CODE_OF_CONDUCT.md).

## Security Vulnerabilities

If you discover a security vulnerability, please send an e-mail to me via [kridoveronique@gmail.com](mailto:kridoveronique@gmail.com). All security vulnerabilities will be promptly addressed.

## Maintainer

-   [Krido](https://github.com/yuxxeun)

## License

Catalogue is open-sourced software licensed under the [AGPL v3](./LICENSE).
