<?php

require('./autoloader.php');

$gateway = new MyGateway();
$service = new MyService($gateway);

echo $service->buildGreetingFor(1) . "\n";
