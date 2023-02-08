<?php

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class DatabaseController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/database', name: 'database')]
    public function index(Request $request): Renderable
    {
        return view('console.database.index');
    }

    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/dict', name: 'dict')]
    public function dict(Request $request): Renderable
    {
        return view('console.dict.index');
    }
}
