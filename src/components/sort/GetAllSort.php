<?php


namespace components\sort;


use components\main\AbstractController;
use core\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GetAllSort extends AbstractController
{
    public function __invoke(ServerRequestInterface $request)
    {
        return $this->storage->getAllSort()
            ->then(function (array $sort) {
               return JsonResponse::ok($sort);
            });
    }
}