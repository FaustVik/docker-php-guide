# Docker compose guide

## _docker php redis mysql nginx_

## Команды:

### Первый запуск

```sh
docker-compose up -d 
```

### Остановить

```sh
docker-compose stop
```

### Запустить

```sh
docker-compose stop
```

### Перезапустить

```sh
docker-compose restart
```

### Посмотреть список контейнеров:

```sh
docker container ls
```

### Посмотреть сеть докера:

```sh
docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)
```

### Как подключиться к контейнеру:

```sh
docker exec -it {container_name} bash
```

### Перезапустить nginx

```sh
docker exec -it {container_name} nginx -s reload
```

### Удалить контейнер:

```sh
docker rm -f {id_container}
```

### Посмотреть список network

```sh
docker network ls
```

### Пересобрать контейнер

```sh
docker-compose up -d --no-deps --build {container_name}
```
