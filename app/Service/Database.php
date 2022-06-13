<?php 
namespace App\Service;

use App\Service\AllConstants;
use \PDO;
use Medoo\Medoo;


class Database {
    private static $database;

    public static function getDB() {
        if (self::$database === null) {
            self::$database = new Medoo([
                    'type' => 'mysql',
                    'host' => AllConstants::$DB_HOST,
                    'database' => AllConstants::$DB_NAME,
                    'username' => AllConstants::$DB_USERNAME,
                    'password' => AllConstants::$DB_PASSWORD,
                    'charset' => 'utf8mb4',
                    'collation' => 'utf8mb4_general_ci',
                    'port' => 3306,
                ]);
        }
        return self::$database; 
    }
}

?>