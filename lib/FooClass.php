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
     * @param int $intOne
     * @param int $intTwo
     * @return int 
     */
    public function __invoke($intOne, $intTwo) {
        return $this->mul($intOne, $intTwo);
    }
    
    /**
     * multiplication, complicated
     * @param int $intOne
     * @param int $intTwo
     * @return int 
     */
    function mul($intOne, $intTwo) {
        return $intOne * $intTwo;
    }
}
