<?php
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/setup.php');

define('DSN', 'mysql:host=' . HOST . ';dbname=' . DB);
define('NO_DATABASE_ERROR', 1049);


class DatabaseConnection
{
    private static $pdo = null;

    public static function connect()
    {
        try {
            if (self::$pdo == null) {
                self::$pdo = new PDO(dsn: DSN, username: USER, options: CONFIG);
                setup::create_Table(self::$pdo);
            }
            return self::$pdo;
        } catch (\PDOException $error) {
            if ($error->getCode() == NO_DATABASE_ERROR) {
                return self::setup_databesse();
            }

            throw $error;
        }
    }

    private static function setup_databesse()
    {
        if (self::$pdo == null) {
            $dsn = 'mysql:host=' . HOST;
            self::$pdo = new PDO($dsn, username: USER, options: CONFIG);
            setup::create_DaTabese(self::$pdo);
        }

        self::$pdo = new PDO(dsn: DSN, username: USER, options: CONFIG);
        return Setup::create_Table(self::$pdo);
    }
}
