<?php


/*
| -------------------------------------------------------------------------
| L2T Framework
| -------------------------------------------------------------------------
|
| User: spatel
| Date: 21/09/18
| Time: 5:11 PM
| Version: 1.0
| Website: http://www.phpcodebooster.com
*/

namespace App\Creational\Singleton;


class DbConnection
{
    use Singleton;

    /**
     * Business Logic Goes here ...
     */
    public function fetch()
    {
        echo "Using the same connection..". PHP_EOL;
    }
}