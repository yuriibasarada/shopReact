<?php


namespace components\main;


class Helper
{
    public static function getOffset($limit, $page) {
        if($page !== 1) {
            $offset = ($page - 1) * $limit;
        } else {
            $offset = 0;
        }
        return $offset;
    }
}