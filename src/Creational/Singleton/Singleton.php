<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 21/09/18
| Time: 5:14 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/

namespace App\Creational\Singleton;


trait Singleton
{
    /**
     * @var null
     */
    private static $instance = null;

    /**
     * DbConnection constructor.
     */
    private function __construct() {
        echo "Creating database connection.. ". PHP_EOL;
    }

    /**
     * Singleton should not be cloned
     */
    private function __clone() {}

    /**
     * Singletons should not be restorable
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new static;
        }
        return self::$instance;
    }
}