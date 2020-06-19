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
- run db seed for add master data
```
php artisan db:seed
```
- config cronjob in your system
```
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```
- you can pull data manually by run these command
```
php artisan pull-data-psi
php artisan pull-data-air-temp
```
- serve your project by run
```
php artisan serve
```
then check your website, it should show current psi data

### Pull data from flat file
You can change the resource and the file path in config/data-gov.php 
By default, it will get the file in format DDMMYYYY.json
