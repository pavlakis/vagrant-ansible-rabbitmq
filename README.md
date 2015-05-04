# RabbitMQ 

## The setup

This is a basic setup of RabbitMQ as outlined in the official docs.

It has been based on the [HUMP](https://github.com/pavlakis/vagrant-ansible-hump) repo, but the test files are meant to be run externally.


## Configuration

* Mounts current dir to /srv
* IP: 192.168.45.56
* Hiawatha: v9.12
* Ubuntu: 14.04.1 LTS
* MariaDB: 10.1.4
* PHP: 5.6.8
* RabbitMQ: 3.5.1

## Usage

* Management console: [http://192.168.45.56:15672/]()
* Login: admin / Admin123

Two files have been created based on the [RabbitMQ PHP Docs](http://www.rabbitmq.com/tutorials/tutorial-one-php.html) first tutorial:

* send.php
* receive.php
