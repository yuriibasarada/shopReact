<?php


namespace components\brand;

use core\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GetAllBrands
{
    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function __invoke(ServerRequestInterface $request)
    {
       return $this->storage->getAllBrand()
           ->then(function (array $brands) {
              return JsonResponse::ok($brands);
           });
    }
}