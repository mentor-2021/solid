<?php
interface Adapter
{
    public function getData();
}
class Mysql implements Adapter
{
    public function getData()
    {
        return 'some data from database';
    }
}
class Controller
{
    private $adapter;
    public function __construct(Mysql $mysql)
    {
        $this->adapter = $mysql;
    }
    function getData()
    {
        $this->adapter->getData();
    }
}