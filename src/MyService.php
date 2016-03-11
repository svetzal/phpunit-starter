<?php

class MyService {

    private $gateway;

    public function __construct(MyGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function buildGreetingFor($id) {
        $item = $this->gateway->retrieveObject($id);
        return "Hello, " . $item['name'];
    }

}
