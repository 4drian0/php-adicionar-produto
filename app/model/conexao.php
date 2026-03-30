<?php

namespace App\Model;

use Dotenv\Dotenv;

class Conexao {
    private static $instance;

    public static function getConn() {
        if (!isset(self::$instance)) {
            $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
            $dotenv->load();

            self::$instance = new \PDO(
                'mysql:host='.$_ENV['DB_HOST'].';dbname='.$_ENV['DB_NAME'].';charset=utf8',
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );
        }
        return self::$instance;
    }
}