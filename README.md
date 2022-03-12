# Zadanie testowe

## №1 - Pierwszy etap
> git clone https://github.com/vitaliitsarov/example-app.git

## №2 - Utwórz kopię pliku
> cp .env.example .env

## №3 - Configure Database
W pliku .env zmień:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=here your database name here
DB_USERNAME=here database username here
DB_PASSWORD=here database password here

## №4 - Wykonaj migracje
> php artisan make:migration

## Start Project
> php artisan serve --port=8000

## Swigger Api Dokumentacja
> http://127.0.0.1:8000/api/docs