<?php

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class CompanyController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/company', name: 'company')]
    public function index(Request $request): Renderable
    {
        return view('console.setting.index');
    }
}
