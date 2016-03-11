<?php

class MyClassTest extends PHPUnit_Framework_TestCase {

  private $gateway;

  public function setUp() {
    $this->gateway = new MyGateway();
    $this->service = new MyService($this->gateway);
  }

  public function testCanInstantiate() {
    $this->assertInstanceOf('MyService', $this->service);
  }

  public function testGreeting() {
    $this->assertEquals('Hello, Sample Name', $this->service->buildGreetingFor(1));
  }

}
