/* Abdelsalam Habib 
25/30685*/
<?php
require_once '../config/db.php';

class ServiceModel {

    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function save($data){
        $stmt = $this->conn->prepare(
            "INSERT INTO records (client_name, service, quantity, price, total)
             VALUES (?, ?, ?, ?, ?)"
        );

        $stmt->bind_param(
            "ssidd",
            $data['client_name'],
            $data['service'],
            $data['quantity'],
            $data['price'],
            $data['total']
        );

        return $stmt->execute();
    }

    public function getAll(){
        $result = $this->conn->query("SELECT * FROM records ORDER BY id DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}