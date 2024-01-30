<?php

declare(strict_types=1);

namespace app\controller\api;

use app\controller\Controller;
use think\response\Json;

class IndexController extends Controller
{
    public function index(): Json
    {
        return $this->success('api server.');
    }
}
