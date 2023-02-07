<?php

declare(strict_types=1);

namespace App\Middleware;

use App\Support\JsonResponse;
use Hyperf\Contract\SessionInterface;
use Hyperf\HttpServer\Contract\RequestInterface as HttpRequest;
use Hyperf\HttpServer\Contract\ResponseInterface as HttpResponse;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuthMiddleware implements MiddlewareInterface
{
    use JsonResponse;

    /**
     * @var ContainerInterface
     */
    protected ContainerInterface $container;

    /**
     * @var HttpRequest
     */
    protected HttpRequest $request;

    /**
     * @var HttpResponse
     */
    protected HttpResponse $response;

    /**
     * @var array
     */
    protected array $guards = ['admin', 'user'];

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
        $guard = array_pad(explode('/', $this->request->path()), 1, null)[0];

        if (in_array($guard, $this->guards)) {
            $session = $this->container->get(SessionInterface::class);
            if (!$session->has($guard . '_auth')) {
                if ($request->getMethod() === 'GET') {
                    return $this->response->redirect('/' . $guard . '/login?callback=' . urlencode($request->fullUrl()));
                } else {
                    return $this->error('Forbidden');
                }
            }
        }

        return $handler->handle($request);
    }
}
