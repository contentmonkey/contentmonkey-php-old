<?php namespace contentmonkey;

abstract class DatabaseProvider {
    public abstract function Connect($host, $database, $username, $password);
    public abstract function QueryArray($sql);
    public abstract function Query($sql);
}

?>
