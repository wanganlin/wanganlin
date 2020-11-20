<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Http\JsonResponse;
use Hyperf\Contract\SessionInterface;
use Hyperf\HttpServer\Contract\RequestInterface as HttpRequest;
use Hyperf\HttpServer\Contract\ResponseInterface as HttpResponse;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class AuthMiddleware
 * @package App\Http\Middleware
 */
class AuthMiddleware implements MiddlewareInterface
{
    use JsonResponse;

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var HttpRequest
     */
    protected $request;

    /**
     * @var HttpResponse
     */
    protected $response;

    /**
     * Auth constructor.
     * @param ContainerInterface $container
     * @param HttpRequest $request
     * @param HttpResponse $response
     */
    public function __construct(ContainerInterface $container, HttpRequest $request, HttpResponse $response)
    {
        $this->container = $container;
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $r = explode('/', $this->request->path());
        $guard = in_array('admin', $r) ? 'admin' : 'user';

        $session = $this->container->get(SessionInterface::class);
        if (!$session->has($guard . '_auth')) {
            if ($request->getMethod() === 'GET') {
                return $this->response->redirect('/' . $guard . '/login?callback=' . urlencode($request->fullUrl()));
            } else {
                return $this->failed('No access');
            }
        }

        return $handler->handle($request);
    }
}
