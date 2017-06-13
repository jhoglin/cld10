CLD - DEMO TWO
===========

```
docker build -t jhoglin/web-container:3.0 .
```
```
docker run --detach --rm --name dfk -p "80:80" jhoglin/web-container:3.0
```