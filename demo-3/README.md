CLD - DEMO TWO
===========

```
docker build -t dfk/web-container:3.0 .
```
```
docker run --detach --rm --name dfk -p "80:80" dfk/web-container:3.0
```