<?php
require 'boot.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $queryString = $_GET['fun'];
  if ($queryString == "getall") {
    $result = $db->getAll();
    echo json_encode($result);
  }
} else {
  $data = file_get_contents('php://input');
  $json_data = json_decode($data);
  $name = $json_data->name;
  $deposit = $json_data->deposit;
  $cCard = $json_data->cCard;
  $db->addAccount($name,$deposit,$cCard);
}



 ?>
