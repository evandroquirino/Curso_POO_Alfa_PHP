## Criando o projeto utilizando Docker

Execute no terminal o comando:

```shell
docker-compose up -d --build
```

Será gerado um container com PHP(Porta 8080), MySql(Porta  default 9906 ) e Phpmyadmin(porta 8088)

```shell
Usuario - aula_oo
Senha Mysql - aulaotop
```


## Acessando o Bash do Container

```shell
docker exec -it curso_poo_svr bash
```