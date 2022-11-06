<?php

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class SegmentController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/segment', name: 'segment')]
    public function index(Request $request): Renderable
    {
        return view('console.segment.index');
    }
}
