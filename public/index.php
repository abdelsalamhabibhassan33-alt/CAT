<?php
require_once '../config/db.php';
require_once '../app/controllers/ServiceController.php';

$controller = new ServiceController($conn);
$records = $controller->handleRequest();

require_once '../app/views/create.php';