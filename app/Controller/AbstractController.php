<?php

declare(strict_types=1);

namespace App\Controller;

use App\Api\JsonResponse;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\ViewEngine\Contract\Renderable;
use function Hyperf\ViewEngine\view;

/**
 * Class AbstractController
 * @package App\Controller
 */
abstract class AbstractController
{
    use JsonResponse;

    /**
     * @Inject
     * @var ContainerInterface
     */
    protected ContainerInterface $container;

    /**
     * @Inject
     * @var RequestInterface
     */
    protected RequestInterface $request;

    /**
     * @Inject
     * @var ResponseInterface
     */
    protected ResponseInterface $response;

    /**
     * The view to render
     * @param $template
     * @param array $data
     * @param string $namespace
     * @return Renderable
     */
    protected function render($template, array $data = [], $namespace = ''): Renderable
    {
        $template = empty($namespace) ? $template : $namespace . '::' . $template;

        return view($template, $data);
    }

    /**
     * The view to render
     * @param $template
     * @param array $data
     * @return Renderable
     */
    protected function display($template, array $data = []): Renderable
    {
        return $this->render($template, $data, 'frontend');
    }
}
