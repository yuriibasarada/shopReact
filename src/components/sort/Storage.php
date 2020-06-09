<?php


namespace components\sort;


use components\main\AbstractStorage;
use React\MySQL\QueryResult;
use React\Promise\PromiseInterface;

class Storage extends AbstractStorage
{
        public function getAllSort(): PromiseInterface {
            return $this->connection->query('SELECT * FROM sort')
                ->then(function (QueryResult $result) {
                    return $result->resultRows;
                });
        }
}