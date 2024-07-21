<?php
// Incluye el archivo con la clase Database
require_once 'Database.php';

// Crear una instancia de la clase Database
$db = new Database();

// Obtener el objeto PDO y realizar alguna operación
$pdo = $db->getPdo();
$stmt = $pdo->query('SELECT nombre, apellido FROM usuarios');
while ($row = $stmt->fetch()) {
    echo $row['nombre'] . ' ' . $row['apellido'] . "<br>";
}

// Cerrar la conexión cuando ya no sea necesaria
$db->closeConnection();
?>


<?php

class Estudiante {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert($nombre, $email) {
        $pdo = $this->db->getPdo();
        $sql = 'INSERT INTO estudiantes (nombre, email) VALUES (:nombre, :email)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function __destruct() {
        $this->db->closeConnection();
    }
}
?>

?>