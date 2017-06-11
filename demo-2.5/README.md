CLD - DEMO TWO
===========

```
docker build -t dfk/web-container:2.5 .
```
```
docker run --detach --rm --name dfk -p "80:80" dfk/web-container:2.5
```