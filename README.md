Dependencies:

  * Docker engine v1.13 or higher. Your OS provided package might be a little old, if you encounter problems, do upgrade. See [https://docs.docker.com/engine/installation](https://docs.docker.com/engine/installation)
  * Docker compose v1.12 or higher. See [docs.docker.com/compose/install](https://docs.docker.com/compose/install/)

#### 1. create .env file 
`cp .env.example .env`

#### 2. Run containers

`docker-compose up -d`

#### 3. Install dependencies

`docker-compose exec php-fpm php composer.phar install`

#### 4. Run migrations

`docker-compose exec php-fpm php artisan migrate`


-------------------------------- 
API requests examples:
- Delete user and all related data:
```
curl -X DELETE -v "http://localhost:8090/api/user/1"
```

- Show post and related data:
```
curl -v "http://localhost:8090/api/post/1"
```
