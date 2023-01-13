# wordpress

```
git clone  ssh://git@github.com:akshakirov/docker-wordpress.git
```

```
cd wordpress/
wget https://ru.wordpress.org/latest-ru_RU.tar.gz
tar zxf latest-ru_RU.tar.gz 
rm -rf latest-ru_RU.tar.gz 
cd ..
```

```
git remote add origin ssh://git@github.com:akshakirov/docker-wordpress.git
git add .
git commit -m "added clean wordpress distro"
git push 
```

