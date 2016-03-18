<?php

class MyClassTest extends PHPUnit_Framework_TestCase {

  private $gateway;

  public function setUp() {
//    $this->gateway = new MyGateway();
    $this->gateway = $this->getMock('MyGateway');
//    $this->gateway = $this->getMockBuilder('MyGateway')->getMock();

    $this->service = new MyService($this->gateway);
  }

  public function testCanInstantiate() {
    $this->assertInstanceOf('MyService', $this->service);
  }

  public function testGreeting() {
    $this->gateway->expects($this->once())
      ->method('retrieveObject')
      ->with(1)
      ->will($this->returnValue(array('id' => 1, name => 'Sample Name')));

    $this->assertEquals('Hello, Sample Name', $this->service->buildGreetingFor(1));
  }

}
