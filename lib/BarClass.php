<?php

/**
 * @package Bar
 * @global SOme classes in Bar. BOOSH.
 */

/*
 * class BarClass
 * @package Bar
 */
class BarClass extends PDO {
    
    /*
     * @param array $config contains the dsn for the PDO connection
     */
    public function __construct($config) {
        /* no real error handling here */
        parent::__construct($config['dsn']);
    }
    
    /**
     * get all rows from the table
     * @param string $table - the table name
     * @param int $limit - default is 10
     */
    public function getRows($table, $limit=10) {
        $sql = "SELECT * FROM $table LIMIT $limit";
        $statement = $this->query($sql);
        return $statement->fetchAll();
    }
}

/**
 * @package Bar
 * Functor class
 * when invoked, it derives the database table based on the name of the class itself
 */
class FuncBarClass extends BarClass {
    
    /**
     * invoke the Functor
     * @param int $limit - defaults to 20
     */
    public function __invoke($limit=20) {
        
        $tableName = $this->_get_table_name();
        
        $this->getRows($tableName, $limit);
    }
    
    /**
     * get the table name for this class, according to convention
     * @return string
     */
    private function _get_table_name() {
        $tmp = __CLASS__;
        return strtolower(substr($tmp, 0, -5));
    }
    
}
