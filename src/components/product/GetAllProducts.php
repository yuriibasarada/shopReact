<?php


namespace components\product;


use components\main\AbstractController;
use components\main\Helper;
use core\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GetAllProducts extends AbstractController
{
    public function __invoke(ServerRequestInterface $request)
    {

        return $this->storage->getAllProducts($request->getQueryParams())
            ->then(function (array $products) {
               return JsonResponse::ok($products);
            });
    }
}