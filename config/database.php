<?php
require_once 'core.php';
class Database{
        
        private $pdo;

        public function __construct() {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
    
            try {
                $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
            } catch (\PDOException $e) {
                throw new \PDOException($e->getMessage(), (int)$e->getCode());
            }
        }

        public function getPdo() {
            return $this->pdo;
        }
    
        public function closeConnection() {
            $this->pdo = null; // Cierra la conexión
        }
}






?>