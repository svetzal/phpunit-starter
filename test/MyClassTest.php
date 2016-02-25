<?php

class MyClassTest extends PHPUnit_Framework_TestCase {

  public function testCanInstantiate() {
    $c = new MyClass();
    $this->assertNotNull($c);
  }

  public function testAdder() {
    $c = new MyClass();
    $this->assertEquals(5, $c->adder(2,3));
  }

}
