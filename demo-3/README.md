CLD - DEMO TWO
===========



```
docker build -t dfk/cld:3.0 .
```
```
docker run --detach --rm --name dfk -p "80:80" dfk/web-container:2.5
```


```
docker-compose up -d
doker-compose logs -f
docker-compose scale web=1
```

```
docker run --detach --rm --name dfk -p "80:80" dfk/cld:3.0
```