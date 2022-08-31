<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractController
{
    #[Inject]
    protected ContainerInterface $container;

    #[Inject]
    protected RequestInterface $request;

    #[Inject]
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
