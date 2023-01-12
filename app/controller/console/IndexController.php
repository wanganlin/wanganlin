<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\View;

class IndexController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }
}
