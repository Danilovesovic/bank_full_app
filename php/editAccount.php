<?php
require 'boot.php';
$data = file_get_contents('php://input');
$json_data = json_decode($data);

$id = $json_data->id;
$name = $json_data->name;
$deposit = $json_data->deposit;
$cCard = $json_data->cCard;

$db->editAccount($id,$name,$deposit,$cCard);
 ?>
