### Install Docker&Docker Compose

```sh
$ curl -sSL https://get.docker.com/ | sh
$ sudo pip install docker-compose
```

### Git_Checkout

```sh
$ git clone https://github.com/suraj143/wordpress-demo.git

$ cd wordpress-demo
```

### Launch Wordpress:

```sh
$ docker-compose up --build -d
$ docker-compose ps
```
* Take a coffe break 
* open your browser to http://localhost:9999

### Launch Weave-Scope UI:

```sh
$ sh weavescope-ui.sh
```
* open your browser to http://localhost:4040
