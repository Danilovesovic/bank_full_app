<?php
require 'boot.php';
$data = file_get_contents('php://input');
$json_data = json_decode($data);
$id = $json_data->id;
$db->deleteAccount($id);
 ?>
