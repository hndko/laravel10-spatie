# Laravel 10 - Spatie

Contoh Penerapan Laravel 10 - Spatie

## Deployment

To deploy this project run

```bash
  composer install
  cp .env.example .env
```

Change DB_DATABASE in the .env structure to whatever you like or you can follow the example below.

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel10_spatie
  DB_USERNAME=root
  DB_PASSWORD=
```

Next run

```bash
  php artisan migrate --seed
  php artisan serve
```
