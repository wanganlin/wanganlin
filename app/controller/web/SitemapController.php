<?php

namespace app\controller\web;

use think\response\View;

class SitemapController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return $this->display('sitemap');
    }
}
