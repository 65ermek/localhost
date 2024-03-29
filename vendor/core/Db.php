<?php

namespace vendor\core;

use R;

class Db {

    protected $pdo;
    protected static $instance;

    protected function __construct() {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . '/rb.php';
        R::setup($db['dsn'], $db['user'], $db['password']);
//        $options = [
//            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
//        ];
//        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['password'], $options);
    }

    public static function instance(): Db
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function execute($sql, $params = []): bool
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }
    public function query($sql, $params = []): array
    {
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute($params);
        if ($res !== false) {
            return $stmt->fetchAll();
        }
        return [];
    }
}