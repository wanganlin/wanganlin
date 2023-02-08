<?php

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class ContentController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/content', name: 'content')]
    public function index(Request $request): Renderable
    {
        return view('console.content.index');
    }
}
