<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;

/**
 * @Controller
 * Class IndexController
 * @package App\Http\Controllers\Web
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping("/")
     * @param string|null $path
     * @return mixed
     */
    public function index(string $path = null)
    {
        $acceptLanguage = $this->request->header('Accept-Language', 'en');
        if ($acceptLanguage) {
            $locale = explode(',', $acceptLanguage)[0];
            $this->translator->setLocale(str_replace('-', '_', $locale));
        }

        return $this->render('frontend::index', [
            'message' => trans('messages.welcome'),
            'path' => $path
        ]);
    }
}
