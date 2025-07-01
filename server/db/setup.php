<?php
require_once(__DIR__ . '/config.php');

class setup
{
    public static function create_DaTabese($pdo)
    {
        $ql = "CREATE DATABASE IF NOT EXISTS " . DB;
        $pdo->exec($ql);
    }

    public static function create_Table($pdo)
    {
        $sql = "CREATE TABLE IF NOT EXISTS tasks (
            id INT AUTO_INCREMENT PRIMARY KEY,
            description VARCHAR(500) NOT NULL,
            done BOOLEAN NOT NULL DEFAULT 0
        )";
        $pdo->exec($sql);

        return $pdo;
    }
}
