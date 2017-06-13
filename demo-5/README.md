CLD - DEMO TWO
===========



```
docker build -t jhoglin/cld:5.0 .
```
```
docker run --detach --rm --name cld -p "80:80" jhoglin/cld:5.0
```


```
docker-compose up -d
doker-compose logs -f
docker-compose scale web=1
```

```
docker run --detach --rm --name cld -p "80:80" jhoglin/cld:5.0
```