<?php declare(strict_types=1);


namespace core;


use Psr\Http\Message\ServerRequestInterface;
use Respect\Validation\Exceptions\NestedValidationException;

final class ErrorHandler
{
    public function __invoke(ServerRequestInterface $request, callable $next)
    {
        try {
            return $next($request);
        } catch (NestedValidationException $exception) {
            return JsonResponse::badRequest(...$exception->getMessages());
        } catch (\Throwable $error) {
            return JsonResponse::internalServerError($error->getMessage());
        }
    }
}