<?php namespace contentmonkey;

class Mysql extends DatabaseProvider {

    private $connection;

    public function Connect($host, $database, $username, $password) {
      $this->connection = new \mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_DATABASE);
      if(mysqli_connect_errno()) {
        echo("Connect failed: ".mysqli_connect_errno());
        exit;
      }
    }

    public function QueryArray($sql) {
      $rs = $this->Query($sql);
      while($row = $rs->fetch_row()) {
        $rows[] = $row;
      }
      $rs->close();
      return $rows;
    }

    public function Query($sql) {
      $result = $this->connection->query($sql);
      if(!$result) {
        echo("Query failed: ".$this->connection->error);
      }
      return $result;
    }

    public function __construct($host, $database, $username, $password) {
      $this->Connect($host, $database, $username, $password);
    }

}

?>
