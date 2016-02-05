<?php

/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 04.02.2016
 * Time: 16:16
 */
abstract class dataBase
{
    protected $server;
    protected $user;
    protected $pass;
    protected $dbName;

    abstract protected function connect();
    abstract protected function sendQuery($sql);

}

class myDB extends dataBase{

    protected function connect()
    {
        // TODO: Implement connect() method.

        mysql_connect($this->server,$this->user,$this->pass);
        mysql_select_db($this->dbName);
    }

    function __construct($dbName, $server='127.0.0.1',$user='root',$pass='')
    {
        $this->server = $server;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbName = $dbName;
        $this->connect();
    }
    protected function sendQuery($sql)
    {
        // TODO: Implement sendQuery() method.
        return mysql_query($sql);

    }

    public function insert($date)
    {
        // TODO: Implement insert() method.
        return $this->sendQuery($date);
    }

    public function update($date)
    {
        // TODO: Implement update() method.
        return $this->sendQuery($date);
    }

    public function select($data)
    {
        // TODO: Implement select() method.
        $res = $this->sendQuery($data);
        $arr = [];
        while($row = mysql_fetch_assoc($res)){

            $arr[] = $row;
        }
        return $arr;
    }
}
