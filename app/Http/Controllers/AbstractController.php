<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\JsonResponse;
use Hyperf\Contract\SessionInterface;
use Hyperf\Contract\TranslatorInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\View\RenderInterface;
use Psr\Container\ContainerInterface;

/**
 * Class AbstractController
 * @package App\Http\Controllers
 */
abstract class AbstractController
{
    use JsonResponse;

    /**
     * @Inject
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;

    /**
     * @Inject
     * @var ResponseInterface
     */
    protected $response;

    /**
     * @Inject
     * @var SessionInterface
     */
    protected $session;

    /**
     * @Inject
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @Inject
     * @var RenderInterface
     */
    protected $view;

    /**
     * The view to render
     * @param $template
     * @param array $data
     * @param string $namespace
     * @return mixed
     */
    protected function render($template, array $data = [], $namespace = '')
    {
        $template = empty($template) ? $template : $namespace . '::' . $template;

        return $this->view->render($template, $data);
    }

    /**
     * The view to render
     * @param $template
     * @param array $data
     * @return mixed
     */
    protected function display($template, array $data = [])
    {
        return $this->render($template, $data, 'frontend');
    }
}
