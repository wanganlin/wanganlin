<?php

declare(strict_types=1);

namespace app\controller\web;

use think\facade\Db;
use think\Request;
use think\response\View;
use Throwable;

class IndexController extends BaseController
{
    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $pathInfo = $request->pathinfo();
        if (empty($pathInfo)) {
            return view('/index');
        }

        try {
            // DB SELECT
            $data = Db::table('posts')->where('segment', $pathInfo)->find();

            if (empty($data)) {
                return view('/error');
            }

            return view('/' . $data->template);
        } catch (Throwable $e) {
            return view('/error', [
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }
}
