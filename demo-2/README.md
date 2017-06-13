CLD - DEMO TWO
===========

Vi vill ha lite mer content och lägger till en paragraf i index.php

```
time docker build -t jhoglin/cld:2.0 .

Sending build context to Docker daemon  72.7 kB
Step 1/7 : FROM alpine:3.4
 ---> 6008ce38ddc1
Step 2/7 : RUN apk --update add nginx php5-fpm &&     mkdir -p /run/nginx
 ---> Using cache
 ---> 703ef64e2fe2
Step 3/7 : COPY www /www
 ---> 2d80b89e3bf4
Removing intermediate container 2298030be359
Step 4/7 : COPY nginx.conf /etc/nginx/
 ---> b3477afe3a4b
Removing intermediate container 8a72205d02b6
Step 5/7 : COPY php-fpm.conf /etc/php5/php-fpm.conf
 ---> 2b17f4a8c435
Removing intermediate container ba10a33e9584
Step 6/7 : EXPOSE 80
 ---> Running in 820b698a01d2
 ---> d8aeff2352dc
Removing intermediate container 820b698a01d2
Step 7/7 : CMD php-fpm -d variables_order="EGPCS" && exec nginx -g "daemon off;"
 ---> Running in f20247eb7885
 ---> 3835a5f7edcd
Removing intermediate container f20247eb7885
Successfully built 3835a5f7edcd
```

Notera `Step 2/7 : RUN apk --update add nginx php5-fpm &&     mkdir -p /run/nginx
 ---> Using cache` Dvs detta lager finns redan känt för docker daemon och går då att återanvända.


Om vi jämför tiderna så blir vinsten med en cache tydlig.
```
time docker build --no-cache=true -t jhoglin/cld:2.0 .
real    0m17.997s

time docker build -t jhoglin/cld:2.0 .
real    0m4.320s
```
```
docker run --detach --rm --name cld -p "80:80" jhoglin/cld:2.0
```



Google
```
gcloud config set project dfk-cld10
gcloud config set compute/zone us-central1-b


gcloud container clusters create dfk-cluster --num-nodes=3
gcloud compute instances list

docker build -t gcr.io/dfk-cld10/cld:2.0 .
gcloud docker -- push gcr.io/dfk-cld10/cld:2.0

kubectl run hello-world --image=gcr.io/dfk-cld10/cld:2.0 --port 80
```