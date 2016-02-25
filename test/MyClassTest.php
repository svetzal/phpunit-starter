<?php

class MyClassTest extends PHPUnit_Framework_TestCase {

  public function testCanInstantiate() {
    $c = new MyClass();
    $this->assertNotNull($c);
  }

}
