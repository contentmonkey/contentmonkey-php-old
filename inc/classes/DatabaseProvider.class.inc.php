<?php namespace contentmonkey;

abstract class DatabaseProvider {
    public abstract function Connect();
    public abstract function QueryArray();
    public abstract function Query();
}

?>