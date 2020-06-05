<?php


namespace components\main;


use React\MySQL\ConnectionInterface;

abstract class AbstractStorage
{

    protected $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }
}