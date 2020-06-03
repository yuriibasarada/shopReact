<?php


namespace components\login;

final class Guard
{
    /**
     * @var string
     */
    private $jwtKey;

    public function __construct(string $jwtKey)
    {
        $this->jwtKey = $jwtKey;
    }

    public function protect(callable  $middleware): ProtectedRoute
    {
        return new ProtectedRoute($this->jwtKey, $middleware);
    }
}