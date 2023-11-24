# CRUD-API

### Prerequisites
- Docker
- Composer
- Node

## Getting Started
- After cloning, cd into the root of the project and run ```docker-compose up -d```
- Once the docker containers are up run ```docker-compose exec app bash``` and run the following commands: <br/>
```bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan storage:link
$ chmod -R 777 storage bootstrap/cache
$ php artisan migrate
$ php artisan db:seed
```
- You can now see the app running at localhost





