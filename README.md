# Smartmortgagesuk
**Smartmortgagesuk** JMM Financial t/a Smart Mortgages UK is an appointed representative of HL Partnership Limited, which is authorised and regulated by the Financial Conduct Authority.<br>
[Visit website](https://smartmortgagesuk.com/)

## Project Setup
```
composer install

composer run-script post-root-package-install

composer run-script post-create-project-cmd

setup .env for database 
e.g
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mortgages
DB_USERNAME=root
DB_PASSWORD=

run: php artisan migrate

```

## Project Requirements
1. PHP ^7.4


## Packages
### Voyager
[Official Documentation](https://voyager-docs.devdojo.com/)

This helps easy with admin panel

## Others
### Clear all compiled configuration, route, cache and view files
```
composer run-script clear-project-compiled-files
```
This command helps to perform the following CLI commands:
```
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```
