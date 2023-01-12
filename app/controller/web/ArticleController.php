<?php

declare(strict_types=1);

namespace app\controller\web;

use think\response\View;

class ArticleController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('/article');
    }
}
