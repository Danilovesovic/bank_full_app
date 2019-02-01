<?php

/**
 *
 */
class QueryBuilder
{
  private $pdo;
  function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
  public function getAll()
  {
    $sql = $this->pdo->prepare('select * from bank');
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_OBJ);
  }
  public function addAccount($name,$deposit,$cCard)
  {
    $sql = $this->pdo->prepare("insert into bank values(NULL,'$name',$deposit,'$cCard',1)");

    $sql->execute();
    return true;
  }
  public function deleteAccount($id)
  {
    $sql = $this->pdo->prepare("delete from bank where id='$id'");
    $sql->execute();
    return true;
  }
  public function getOne($id)
  {
    $sql = $this->pdo->prepare("select * from bank where id='$id'");
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_OBJ);

  }
  public function editAccount($id,$name,$deposit,$cCard)
  {
    $sql = $this->pdo->prepare("update bank set name='$name',deposit='$deposit',cCard='$cCard' where id='$id'");
    $sql->execute();
    return true;
  }
}

return $db = new QueryBuilder(Connection::make());


 ?>
