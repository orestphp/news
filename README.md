## Technologies Used

   - Docker
   - FROM nginx:1.18-alpine
   - FROM php:8.2-fpm
   - FROM mysql:8.0
   - FROM phpMyAdmin

## Project Installation

After 'git clone', inside repo:
```
$ make init
```
```
$ make up
```

## Smarty Installation
Note: if your project lives at - ***/var/www/news*** (linux)
- in CLI:
     * `mkdir -p /var/www/news/app/smarty/templates/`
     * `mkdir -p /var/www/news/app/smarty/templates_c/ `
     * `mkdir -p /var/www/news/app/smarty/cache/ `
     * `mkdir -p /var/www/news/app/smarty/configs/`
     * `docker exec -it news-app-1 chown -R www-data:www-data /var/www/news/app/smarty/templates_c/`
     * `docker exec -it news-app-1 chown -R www-data:www-data /var/www/news/app/smarty/cache/`

## app
http://127.0.0.1:8080/

## phpmyadmin
http://127.0.0.1:8081/
   - `db`
   - `root`
   - `root`

## Command Glossary
   - `make init`
   - `make down`
   - `make up`
   - `make restart` - rebuild and start containers
   - `docker ps` - list all running containers
   - `docker exec -it <NAME> sh` - Enter container
   - `docker logs -f <container_id>` - see incomming logs for container
   - Swow tree Directory/Files in container: 
     ``` $ find . -print | sed -e 's;[^/]*/;|____;g;s;____|; |;g'```
     
## Testing vars - tt(var):array / td(var):dump
   - `?><pre><?= tt($articles); ?></pre><?php`