# Telepités:
```sh
$ docker-compose up -d
$ docker exec -it sas-php-fpm bash 
$ composer install
$ php artisan migrate:fresh --seed
$ php artisan key:generate
```
# CSS,Js
```sh
docker run --rm -ti -v $(pwd):/app node bash
cp app
npm install
npm run dev/watch
```
