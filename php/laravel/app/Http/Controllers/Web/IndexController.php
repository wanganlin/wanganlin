<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Content\ContentService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\RouteDiscovery\Attributes\Route;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return Renderable
     */
    #[Route(fullUri: '/')]
    public function index(Request $request): Renderable
    {
        $path = $request->getPathInfo();
        if (empty($path)) {
            return view('web::index');
        }

        $contentService = new ContentService();
        $content = $contentService->getContentByPath($path);
        if (empty($content)) {
            return view('web::404');
        }

        $tpl = public_path('themes/default/' . $content['tpl'] . '.blade.php');
        if (!file_exists($tpl)) {
            return view('web::404');
        }

        return view('web::' . $content['tpl']);
    }
}
