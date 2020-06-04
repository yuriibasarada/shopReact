<?php


namespace components\product;


use core\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GetAllProducts
{

    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->storage->getAllProducts()
            ->then(function (array $products) {
               return JsonResponse::ok($products);
            });
    }
}