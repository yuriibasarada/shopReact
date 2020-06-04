<?php


namespace components\material;


use React\MySQL\ConnectionInterface;
use React\MySQL\QueryResult;
use React\Promise\PromiseInterface;

class Storage
{
    private $connection;

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    public function getAllMaterials(): PromiseInterface
    {
        return $this->connection->query('SELECT * FROM material')
            ->then(function (QueryResult $result) {
               return $result->resultRows;
            });
    }


}