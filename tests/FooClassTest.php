<?php

require_once('FooClass.php');

class FooClassTest extends PHPUnit_Framework_TestCase {
    
    function setUp() {
        $this->a = 2;
        $this->b = 6;
        $this->answer = 12;
        $this->foo = new Foo();
    }
    
    function testMul() {
        $result = $this->foo->mul($this->a, $this->b);
        $this->assertEquals($this->answer, $result);
    }
    
    function testFunctor() {
        $foo = new Foo();
        $result = $foo($this->a, $this->b);
        $this->assertEquals($this->answer, $result);
        
        $this->assertTrue(TRUE, "This will fucking pass.");
    }
    
}