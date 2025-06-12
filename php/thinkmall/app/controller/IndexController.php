<?php

declare(strict_types=1);

namespace app\controller;

use think\facade\Db;
use think\Request;
use think\response\View;

class IndexController extends BaseController
{
    public function index(Request $request): View
    {
        $pathInfo = $request->pathinfo();
        if (empty($pathInfo)) {
            return view('/index');
        }

        // DB SELECT
        $data = Db::table('posts')->where('segment', $pathInfo)->find();

        if (empty($data)) {
            return view('/error');
        }

        return view('/'.$data->template);
    }
}
