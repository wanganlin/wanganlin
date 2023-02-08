<?php

namespace App\Http\Controllers\Console;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class CommentController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: RouteServiceProvider::HOME . '/comment', name: 'comment')]
    public function index(Request $request): Renderable
    {
        return view('console.comment.index');
    }
}
