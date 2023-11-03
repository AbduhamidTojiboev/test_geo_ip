## Requirments
- Docker

## Instalation
- Clone the project
```
git clone {repo_url}
```
- Copy .env data from example
```shell
cp .env.example .env
```
- Set arguments .env

- Run & build docker:
```
docker-compose up -d --build 
```
- Run without build containers:
```
docker-compose up -d
```

- Go inside docker container geo_ip:
```shell
docker-compose exec app bash
```

- Run command in shell
```
composer install
```

http://localhost/ip/212.121.12.1
