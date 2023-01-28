<?php

declare(strict_types=1);

namespace app\controller\api;

use think\response\Json;

class ArticleController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/api/article",
     *     @OA\Response(response="200", description="An example resource")
     * )
     * @return Json
     */
    public function index(): Json
    {
        return $this->success('article');
    }
}
