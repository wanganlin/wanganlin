<?php

declare(strict_types=1);

namespace App\Controller\Web;

use App\Controller\AbstractController;
use Hyperf\Contract\TranslatorInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\ViewEngine\Contract\Renderable;

#[Controller]
class IndexController extends AbstractController
{
    #[Inject]
    protected TranslatorInterface $translator;

    /**
     * @param string|null $path
     * @return Renderable
     */
    #[GetMapping(path: '/')]
    public function index(string $path = null): Renderable
    {
        $acceptLanguage = $this->request->header('Accept-Language', 'en');
        if ($acceptLanguage) {
            $locale = explode(',', $acceptLanguage)[0];
            $this->translator->setLocale(str_replace('-', '_', $locale));
        }

        return $this->display('index', [
            'message' => trans('messages.welcome'),
            'path' => $path,
        ]);
    }
}
