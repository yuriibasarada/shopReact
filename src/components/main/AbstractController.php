<?php


namespace components\main;


abstract class AbstractController
{

    protected $storage;

    public function __construct(AbstractStorage $storage)
    {
        $this->storage = $storage;
    }
}