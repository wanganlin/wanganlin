<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\RouteDiscovery\Attributes\Route;

class IndexController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME, name: 'admin')]
    public function index(Request $request): Renderable
    {
        return view('console.index');
    }

    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/dashboard', name: 'dashboard')]
    public function dashboard(Request $request): Renderable
    {
        return view('console.dashboard');
    }

    /**
     * @param Request $request
     * @return string
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/menu', name: 'menu')]
    public function menu(Request $request): string
    {
        $a = array(
                array(
                    'id' => 1,
                    'title' => '控制台',
                    'icon' => 'layui-icon layui-icon-console',
                    'type' => 0,
                    'href' => '',
                    'children' =>
                        array(
                            0 =>
                                array(
                                    'id' => 14,
                                    'title' => '百度一下',
                                    'icon' => 'layui-icon layui-icon-console',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'http://www.bing.com',
                                ),
                        ),
                ),
                array(
                    'id' => 'system',
                    'title' => '系统管理',
                    'icon' => 'layui-icon layui-icon-set-fill',
                    'type' => 0,
                    'href' => '',
                    'children' =>
                        array(
                            0 =>
                                array(
                                    'id' => 601,
                                    'title' => '用户管理',
                                    'icon' => 'layui-icon layui-icon-face-smile',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'view/system/user.html',
                                ),
                            1 =>
                                array(
                                    'id' => 602,
                                    'title' => '角色管理',
                                    'icon' => 'layui-icon layui-icon-face-cry',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'view/system/role.html',
                                ),
                            2 =>
                                array(
                                    'id' => 603,
                                    'title' => '权限管理',
                                    'icon' => 'layui-icon layui-icon-face-cry',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'view/system/power.html',
                                ),
                            3 =>
                                array(
                                    'id' => 604,
                                    'title' => '部门管理',
                                    'icon' => 'layui-icon layui-icon-face-cry',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'view/system/deptment.html',
                                ),
                            4 =>
                                array(
                                    'id' => 605,
                                    'title' => '行为日志',
                                    'icon' => 'layui-icon layui-icon-face-cry',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'view/system/log.html',
                                ),
                            5 =>
                                array(
                                    'id' => 606,
                                    'title' => '数据字典',
                                    'icon' => 'layui-icon layui-icon-face-cry',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'view/system/dict.html',
                                ),
                        ),
                ),
                array(
                    'id' => 'code',
                    'title' => '开发工具',
                    'icon' => 'layui-icon layui-icon-util',
                    'type' => 0,
                    'href' => '',
                    'children' =>
                        array(
                            0 =>
                                array(
                                    'id' => 801,
                                    'title' => '表单构建',
                                    'icon' => 'layui-icon layui-icon-util',
                                    'type' => 1,
                                    'openType' => '_iframe',
                                    'href' => 'component/code/index.html',
                                ),
                        ),
                ),
        );
        return 'ok';
    }

    /**
     * @param Request $request
     * @return string
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/message', name: 'message')]
    public function message(Request $request): string
    {
        return file_get_contents(public_path('assets/admin/data/message.json'));
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(method: 'post', fullUri: RouteServiceProvider::HOME . '/logout', name: 'logout')]
    public function logout(Request $request): JsonResponse
    {
        Auth::logout();
        return $this->success('ok');
    }
}
