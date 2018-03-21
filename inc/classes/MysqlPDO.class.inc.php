<?php namespace contentmonkey;
class MysqlPDO extends DatabaseProvider {

    private $connection;

    public function Connect($host, $database, $username, $password) {
      $connection = new \PDO('mysql:host='.$host.';dbname='.$database.';', $username, $password);
    }

    public function QueryArray($sql) {
      $result = $this->Query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function Query($sql) {
        $statement = $connection->prepare($sql);
        $statement->execute();
        return $statement;
    }
}
?>
