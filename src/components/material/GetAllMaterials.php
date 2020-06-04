<?php


namespace components\material;


use core\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;

class GetAllMaterials
{
    private $storage;
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function __invoke(ServerRequestInterface $request)
    {
        return $this->storage->getAllMaterials()
            ->then(function (array $materials) {
                return JsonResponse::ok($materials);
            });
    }
}