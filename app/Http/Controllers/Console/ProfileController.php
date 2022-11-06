<?php

declare(strict_types=1);

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class ProfileController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/profile', name: 'profile')]
    public function index(Request $request): Renderable
    {
        return view('console.profile.index');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    #[Route(method: 'post', fullUri: RouteServiceProvider::HOME . '/profile')]
    public function update(Request $request): JsonResponse
    {
        return $this->success('ok');
    }
}
