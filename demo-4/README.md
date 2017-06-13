CLD - DEMO TWO
===========



```
docker build -t dfk/cld:4.0 .
```
```
docker run --detach --rm --name cld -p "80:80" dfk/cld:4.0
```


```
docker-compose up -d
doker-compose logs -f
docker-compose scale web=1
```

```
docker run --detach --rm --name dfk -p "80:80" dfk/cld:3.0
```