#!/bin/bash

sudo docker run --name uLaravel -d -p 3306:3306 -v mysql:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=w2bw2b mysql:5.7

