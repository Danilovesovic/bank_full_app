<?php
  /**
   *
   */
  class Connection
  {

  public static function make()
  {
    try {
      return $pdo = new PDO('mysql:host=localhost;dbname=danilovadb','root','');
    } catch (PDOExeption $e) {
      echo $e->getMessage();
    }

  }
  }

 ?>
