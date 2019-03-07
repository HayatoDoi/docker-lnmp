### docker-lnmp
Docker Compose for ```Nginx, Mysql, PHP-fpm, PhpMyAdmin```  
Attention!! This Docker Compose is for development!!  

#### Overview
```
.
├── README.md (this file)
├── container
│   ├── mysql
│   ├── nginx
│   │   ├── Dockerfile
│   │   ├── fastcgi.conf
│   │   ├── nginx.conf
│   │   └── server.conf
│   └── php-fpm
│       ├── Dockerfile
│       └── php.ini
├── docker-compose.yml
└── public (nginx's docment root)
    ├── dbtest.php (database test code)
    ├── info.php (view phpinfo)
    └── welcome.php (welcomw page)
```

#### Description
- /public ... Docment root.
- /container/nginx/nginx.conf ... Nginx's configuration file
- /container/nginx/server.conf ... Nginx's configuration file
- /container/php-fpm/php.ini ... PHP-fpm's configuration file

#### Demo
PHP-fpm on Nginx starts up in port 80.  
![https://raw.githubusercontent.com/HayatoDoi/docker-lnmp/master/img/localhost80.png](https://raw.githubusercontent.com/HayatoDoi/docker-lnmp/master/img/localhost80.png)  
PhpMyAdmin starts up in port 8080.  
![https://raw.githubusercontent.com/HayatoDoi/docker-lnmp/master/img/localhost8080.png](https://raw.githubusercontent.com/HayatoDoi/docker-lnmp/master/img/localhost8080.png)  

#### Requirement
- Docker version 17.03.0-ce
- docker-compose version 1.11.2

#### Usage
[http://localhost](http://localhost) PHP-fpm on Nginx
[http://localhost:8080](http://localhost:8080) PhpMyAdmin

#### Install
- Clone this repository
`git clone https://github.com/nikaidoumari/docker-lnmp.git`
- Move to docker-lnmp
`cd docker-lnmp`
- Start
`docker-compose up`
- Stop
`docker-compose stop`
- Remove
`docker-compose rm`

#### Mysql Password
- user : root
- password : root

If you want to change password, edit docker-compose.yml  

#### Licence
These codes are licensed under CC0.  
[![CC0](http://i.creativecommons.org/p/zero/1.0/88x31.png "CC0")](http://creativecommons.org/publicdomain/zero/1.0/deed.ja)  

#### Author
[NikaidouMari](https://github.com/nikaidoumari)  
