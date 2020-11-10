## install laradock
```
$ git clone https://github.com/shonansurvivors/laradock-like.git laradock
```

## modify .env
```
$ cd laradock
$ cp env-example .env
$ vim .env

APP_CODE_PATH_HOST=../laravel
DATA_PATH_HOST=../data
COMPOSE_PROJECT_NAME=laravel-sns
```

## modify /laradock/docker/php-fpm/Dockerfile
```
WORKDIR /var/www/public/
```

## create DB
```
cd laradock
docker-compose exec workspace psql -U default -h postgres
default=# create database larasns;
default=# \q

docker-compose exec workspace psql -U default -h postgres -d larasns
docker-compose exec workspace php artisan migrate
```
