<?php


namespace components\brand;

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

    public function getAllBrand(): PromiseInterface
    {
        return $this->connection
            ->query(
                'SELECT * FROM brand'
            )->then(function (QueryResult $result) {
                return $result->resultRows;
            });
    }
}