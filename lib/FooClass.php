<?php

/**
 * @global class written to test hudson CI stuff
 * @package HudsonTest
 */

/**
 * Foo class
 * @package HudsonTest
 */
class Foo {
    
    /**
     * constructor, literally does nothing
     */
    public function __construct() {}
    
    /**
     * functor pattern
     * @param int $a
     * @param int $b
     * @return int 
     */
    public function __invoke($a, $b) {
        return $this->mul($a, $b);
    }
    
    /**
     * multiplication, complicated
     * @param int $a
     * @param int $b
     * @return int 
     */
    function mul($a, $b) {
        return $a * $b;
    }
}
