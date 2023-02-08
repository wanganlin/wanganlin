<?php

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class SettingController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/setting', name: 'setting')]
    public function index(Request $request): Renderable
    {
        return view('console.setting.index');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
	public function update(Request $request): JsonResponse
    {
		return $this->success('ok');
	}
}
