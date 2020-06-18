# Local Development

- clone source
- copy env
```
cp .env.example .env
```
- config correct database
- install composer
```
composer install
```
- setup migrate:
```
php artisan migrate:install
```
- run migration: 
```
php artisan migrate
```
- config cronjob: 
```
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```
- you can pull data manually by run these command
```
php artisan pull-data-psi
php artisan pull-data-air-temp
```

