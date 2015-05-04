<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;


$connection = new AMQPConnection('192.168.45.56', 5672, 'admin', 'Admin123');
$channel = $connection->channel();



$channel->queue_declare('hello', false, false, false, false);

$msgText = ' Sent on: ' . date('m-d-Y H:i:s');

$msg = new AMQPMessage('Hello World!' . $msgText);
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World! $msgText'\n";

$channel->close();
$connection->close();
