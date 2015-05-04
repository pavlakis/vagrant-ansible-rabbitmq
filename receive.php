<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;

$connection = new AMQPConnection('192.168.45.56', 5672, 'admin', 'Admin123');
$channel = $connection->channel();

$channel->queue_declare('hello', false, false, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($msg) {
  echo " [x] Received ", $msg->body, "\n";
};

$channel->basic_consume('hello', '', false, true, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}
