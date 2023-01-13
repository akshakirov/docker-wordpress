# wordpress

```
git clone  ssh://git@github.com:akshakirov/docker-wordpress.git
```

## update wordpress to latest if needed
```
cd wordpress/
wget https://ru.wordpress.org/latest-ru_RU.tar.gz
tar zxf latest-ru_RU.tar.gz 
rm -rf latest-ru_RU.tar.gz 
cd ..
```

## Build and start
```
docker compose up -d --remove-orphans
```
