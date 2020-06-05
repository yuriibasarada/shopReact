<?php


namespace components\product;


use components\main\AbstractStorage;
use components\main\Helper;
use React\MySQL\QueryResult;
use React\Promise\PromiseInterface;

class Storage extends AbstractStorage
{

    public function getAllProducts(array $params): PromiseInterface
    {
        $offset = Helper::getOffset($params['limit'], $params['page']);
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM product";
        if((int)$params['category_id']) {
            $sql .= " WHERE category_id = " . (int)$params['category_id'];
        }
        if(isset($params['sort_by']) && $params['sort_type']) {
            $sql .= ' ORDER BY ' . $params['sort_by'] . ' ' . $params['sort_type'];
        }
        $sql .= " LIMIT " . $params['limit'] . ' OFFSET ' . $offset;

        return $this->connection->query($sql)
            ->then(function (QueryResult $result) {
                return $this->connection->query('SELECT FOUND_ROWS() as count;')
                    ->then(function (QueryResult $result1) use ($result) {
                        return [
                            'products' => $result->resultRows,
                            'count' => $result1->resultRows[0]['count']
                        ];
                    },  function (\Exception $e) {
                        echo $e->getMessage();
                    });
            }, function (\Exception $e) {
                echo $e->getMessage();
            });
    }

}