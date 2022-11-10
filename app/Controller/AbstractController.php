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
     * @return Renderable
     */
    protected function render($template, array $data = []): Renderable
    {
        return view('frontend::' . $template, $data);
    }
}
