<?php
require_once __DIR__ . '/../models/ServiceModel.php';

class ServiceController {

    private $model;

    public function __construct($conn){
        $this->model = new ServiceModel($conn);
    }

    public function handleRequest(){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $data = [
                'client_name' => $_POST['client_name'],
                'service' => $_POST['service'],
                'quantity' => $_POST['quantity'],
                'price' => $_POST['price'],
                'total' => $_POST['total']
            ];

            $this->model->save($data);
        }

        return $this->model->getAll();
    }
}