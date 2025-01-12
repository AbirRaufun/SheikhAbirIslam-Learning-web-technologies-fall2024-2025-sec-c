<?php
require_once 'database.php';

class EmployerModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function register($data) {
        $sql = "INSERT INTO employers (employerName, companyName, contactNo, username, password) 
                VALUES (:employerName, :companyName, :contactNo, :username, :password)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function update($data) {
        $sql = "UPDATE employers SET employerName = :employerName, companyName = :companyName, contactNo = :contactNo WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($data);
    }

    public function delete($username) {
        $sql = "DELETE FROM employers WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['username' => $username]);
    }

    public function search($username) {
        $sql = "SELECT * FROM employers WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
