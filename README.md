# Nuxt - Laravel

## Technologies Used

   - FROM mariadb:10.6.8
   - FROM redis:alpine
   - FROM php:8.2-fpm
   - FROM nginx:1.18-alpine
   - xdebug 2

## Install

After 'git clone', inside repo:
```
$ make init
```
```
$ make up
```

### app
http://127.0.0.1:8080/

### phpmyadmin
http://127.0.0.1:8081/
   - `db
   - `root`
   - `root`

### phpRedisAdmin
http://127.0.0.1:83/

## Development


## Command Glossary
   - `make init`
   - `make down`
   - `make up`
   - `make dev`
   - `docker ps` - list all running containers
   - `docker exec -it <NAME> sh` - Enter container
   - `docker logs -f <container_id>` - see incomming logs for container
