<?php
require 'boot.php';
$id = $_GET['id'];
  $account = $db->getOne($id)[0];
  echo json_encode($account);
 ?>
