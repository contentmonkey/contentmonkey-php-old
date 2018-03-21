<?php namespace contentmonkey;

abstract class DatabaseProvider {
    private $connection;
    public abstract function Connect($host, $database, $username, $password);
    public abstract function QueryArray($sql);
    public abstract function Query($sql);
    public abstract function __construct($host, $database, $username, $password);
}

?>
