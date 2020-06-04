<?php


namespace components\category;


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

    public function getAllCategories(): PromiseInterface {
        return $this->connection->query('SELECT * FROM category')
            ->then(function (QueryResult $result) {
                return $result->resultRows;
            });
    }

}