# course-manager

## Executar via docker

docker-compose up --build

docker-compose up -d

docker-compose exec php-course bash

## Setup do projeto

cp .env.example .env

composer install

php artisan key:generate

php artisan migrate

php artisan db:seed