<?php

declare(strict_types=1);

namespace App\Controller;

use App\Support\JsonResponse;
use Hyperf\ViewEngine\Contract\Renderable;
use function Hyperf\ViewEngine\view;

abstract class AbstractController
{
    use JsonResponse;

    /**
     * The view to render
     * @param $template
     * @param array $data
     * @param string $namespace
     * @return Renderable
     */
    protected function render($template, array $data = [], string $namespace = ''): Renderable
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
