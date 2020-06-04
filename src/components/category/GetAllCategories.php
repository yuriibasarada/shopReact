<?php


namespace components\category;


use core\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GetAllCategories
{
    private $storage;
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->storage->getAllCategories()
            ->then(function (array $categories) {
               return JsonResponse::ok($categories);
            });
    }
}