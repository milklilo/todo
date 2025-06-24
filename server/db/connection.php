<?php
require_once(_DIR_ . '/config.php');
require_once(_DIR_ . '/setup.php');

define('DSN', 'mysql:host=' . HOST . ';dbname=' . DB);
define('NO_DATABASE_ERROR', 1049);


class DatabaseConnection
{
    private static $pdo = null;

    public static function connect()
    {
        if (self:: $pdo == null) {
            self::$pdo = new PDO(dsn: DSN, username: USER, options: CONFIG);
            setup::createTable(self::$pdo);
        }
        return self::$pdo;
    } catch (\PODEException $error){
        if ($error->getCode()== NO_DATABASE_ERROR) {
            return self::setup_databesse();
        }

        throw $error;
    }

    private static function setup_databesse()
    {
        if (self::$pdo == null) {
            self::$pdo = new PDO(dsn: DSN,username: USER,options: CONFIG);

        }

        setup::create_database(self::$pdo);
        return Setup::create_table(self::$pdo);
    }
}